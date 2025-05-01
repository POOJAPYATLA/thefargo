document.addEventListener("DOMContentLoaded", () => {
  const chatToggle = document.getElementById("chatToggle");
  const chatWindow = document.querySelector(".chat-window");
  const chatMessages = document.getElementById("chatMessages");
  const chatClose = document.getElementById("closeChat");

  // Chat Flow
  const chatbotFlow = {
    start: {
      message:
        "Hello! 👋 Welcome to The Fargo, your ideal getaway destination! 😊 I'm here to assist you with any questions and help you book the perfect stay. How can I help you today?",
      options: [
        { text: "Deck", next: "options" },
        { text: "Porch", next: "options" },
        { text: "Treetrop", next: "options" },
        { text: "Valley", next: "options" },
      ],
    },
    options: {
      message:
        "Hello! 👋 Welcome to The Fargo, your ideal getaway destination! ",
      options: [
        { text: "I want to know about the property", next: "property" },
        // { text: "Tell me about the facilities", next: "facilities" },
        { text: "What are the prices?", next: "pricing" },
        { text: "I want to book a stay", next: "booking" },
        { text: "Contact support", next: "support" },
      ],
    },
    property: {
      message:
        "Here's a little about our property! We offer luxurious staycation accommodations, each with its own unique charm. Feel free to ask about anything you'd like to know.",
      options: [
        { text: "Is there an in-house kitchen?", next: "kitchen" },
        { text: "Is the place pet-friendly?", next: "pets" },
        { text: "Does each property come with a private pool?", next: "pool" },
        { text: "Can we host events at the property?", next: "events" },
      ],
    },
    facilities: {
      message:
        "Here are some of the fantastic facilities we offer at The Fargo:",
      options: [
        { text: "Is there a gym?", next: "gym" },
        { text: "Do you have a spa?", next: "spa" },
        { text: "Are cycles available for use?", next: "cycles" },
      ],
    },
    booking: {
      message:
        "Please call or what's app for book a stay at THE FARGO. +91 99591 12558",
    },
    availability: {
      message:
        "Please call or what's app for the details at THE FARGO. +91 99591 12558",
    },
    gym: {
      message:
        "Currently, we don't have a gym on-site, but we provide plenty of outdoor activities for your fitness, like yoga and hiking! 🌿",
    },
    spa: {
      message:
        "Yes, we have an exclusive spa where you can unwind and relax with a variety of treatments. 💆 Would you like to book a spa session?",
    },
    cycles: {
      message:
        "Unfortunately, cycles are not available at the property. However, we offer other activities such as nature walks and hiking to keep you active during your stay. 🚶",
    },
    kitchen: {
      message:
        "Yes, we have a fully equipped in-house kitchen available at all our properties. You'll have everything you need to prepare your own meals. 🍽️",
    },
    pets: {
      message:
        "Yes, we welcome pets at our staycations! Bring your furry friends along and make them part of your holiday. 🐾",
    },
    pool: {
      message:
        "Absolutely! Every property features a private pool for your exclusive use, ensuring ultimate privacy and relaxation. 🏊",
    },
    events: {
      message:
        "Yes, event hosting is possible! Whether it's a birthday party, a corporate retreat, or a family gathering, we can help make your event special. Let us know your requirements and we'll assist you with the arrangements.",
    },
    pricing: {
      message:
        "Our pricing varies depending on the accommodation and your preferred dates. We also offer different packages that include meals and special services. Would you like to check availability for specific dates?",
      options: [
        { text: "Yes, Check availability", next: "availability" },
        { text: "Tell me about meal inclusions", next: "meals" },
        { text: "Back to Booking", next: "start" },
      ],
    },
    meals: {
      message:
        "We provide complimentary breakfast with every booking. 🍳 If you're interested in additional meals or meal packages, just let us know, and we can arrange it for you! For more info Please call to +91 99591 12558.",
    },
    support: {
      message: "How can I assist you today? 😊",
      options: [
        {
          text: "I have a question about my booking",
          next: "booking_question",
        },
        {
          text: "I need help with a specific request",
          next: "specific_request",
        },
        { text: "I want to speak with a human", next: "speak_human" },
      ],
    },
    speak_human: {
      message:
        "One of our support agents will assist you shortly. Please hold on for a moment.",
    },
  };

  let currentStep = "start";

  // Add a message
  function addMessage(sender, message) {
    const messageDiv = document.createElement("div");
    messageDiv.classList.add(
      "chat-message",
      sender === "user" ? "user-message" : "bot-message"
    );
    messageDiv.textContent = message;
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  // Add chat options
  function addOptions(options) {
    const optionsDiv = document.createElement("div");
    optionsDiv.classList.add("chat-options");
    options.forEach((option) => {
      const optionDiv = document.createElement("div");
      optionDiv.classList.add("chat-option");
      optionDiv.textContent = option.text;
      optionDiv.addEventListener("click", () =>
        handleOptionClick(option.next, option.text)
      );
      optionsDiv.appendChild(optionDiv);
    });
    chatMessages.appendChild(optionsDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  // Handle option click
  function handleOptionClick(nextStep, userText) {
    addMessage("user", userText);
    currentStep = nextStep;
    const step = chatbotFlow[nextStep];
    if (step) {
      setTimeout(() => {
        addMessage("bot", step.message);
        if (step.options) {
          addOptions(step.options);
        }
      }, 500);
    }
  }

  // Open/Close Chat
  chatToggle.addEventListener("click", () => {
    if (
      chatWindow.style.display === "none" ||
      chatWindow.style.display === ""
    ) {
      chatWindow.style.display = "flex";

      // Display initial chat message only once
      if (chatMessages.children.length === 0) {
        const startStep = chatbotFlow[currentStep];
        addMessage("bot", startStep.message);
        addOptions(startStep.options);
      }
    } else {
      chatWindow.style.display = "none";
    }
  });

  chatClose.addEventListener("click", () => {
    chatWindow.style.display = "none";
  });
  // Ensure chat window starts hidden
  chatWindow.style.display = "none";
});

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php'; ?>
    <title>Privacy Policy</title>
    <style>
        /* Custom CSS for replacing list bullets with dash (-) */
        ul.custom-list {
            list-style: none; /* Removes default bullets */
            padding-left: 0;  /* Ensures no extra padding */
        }

        ul.custom-list li::before {
            content: "-";
            margin-right: 8px; /* Adjust this for space between the dash and text */
            color: #4A4A4A; /* Adjust the color if necessary */
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php 
        $isScroll = false;
        include_once 'includes/header.php'; 
    ?>
    <!-- Header -->

    <!-- Banner -->
    <div class="relative flex flex-col w-full h-[70vh] md:h-[50vh] mt-4 sm:mt-8 md:mt-16 text-white bg-cover bg-center bg-no-repeat z-10"
         style="background-image: url('/assets/images/deck/deck-banner.webp');">
        <div class="absolute inset-0 bg-black/50 z-20"></div>
    </div>

    <!-- Page Heading -->
    <div class="text-center mt-4 sm:mt-6 md:mt-10 py-10">
        <?php
            $title = "privacy policy";
            include 'includes/heading.php';
        ?>
    </div>

    <div class="container-item mt-6 sm:mt-8 md:mt-12 lg:mt-20">

        <p data-aos="fade-up" class="mb-2 sm:mb-4 text-sm md:text-lg">
            The Fargo ("us", "we", or "our") operates the website <a href="https://thefargo.in" class="text-fargo underline">https://thefargo.in</a> as our main site and the services offered at the Fargo (hereinafter referred to as the "Service"). This page aims to inform you of our policies regarding the collection, use, and disclosure of personal information that we receive from users of the Service. By using the Service, you agree to the collection and use of information in accordance with this policy.
        </p>
        <h2 data-aos="fade-up" class="text-sm md:text-lg sm:text-xl font-semibold mt-6 sm:mt-8 mb-2 sm:mb-4">Information Collection and Use</h2>
        <p data-aos="fade-up" class="mb-2 sm:mb-4">
            We may collect the following types of personal information while you use our Service:
        </p>
        <ul data-aos="fade-up" class="custom-list mb-2 sm:mb-4 space-y-1 sm:space-y-2">
            <li data-aos="fade-up">Personal Identifiable Information (PII): This includes your name, email address, phone number, mailing address, and government-issued identification (e.g., passport, driver's license) for booking and identification purposes.</li>
            <li data-aos="fade-up">Payment Information: This involves credit/debit card details, bank account information, or other payment details you provide to process transactions.</li>
            <li data-aos="fade-up">Browsing and Usage Data: This includes your IP address, browser type, pages you visit on our website, the time and date of your visit, and other diagnostic data. We use this to monitor and improve our Service.</li>
            <li data-aos="fade-up">Preference Information: We may collect information about your room preferences, dietary requirements, activity interests, or other choices you communicate to us to enhance your stay.</li>
        </ul>

        <h2 data-aos="fade-up" class="text-sm md:text-lg sm:text-xl font-semibold mt-6 sm:mt-8 mb-2 sm:mb-4">Use of Your Information</h2>
        <p data-aos="fade-up" class="mb-2 sm:mb-4">
            The collected information may be used for the following purposes:
        </p>
        <ul class="custom-list mb-2 sm:mb-4 space-y-1 sm:space-y-2">
            <li data-aos="fade-up">Reservation Management: To process and confirm your bookings, manage your stay, and provide relevant services during your visit.</li>
            <li data-aos="fade-up">Service Improvement: To contact you with information about your stay, promote offers, or update relevant to our resort.</li>
            <li data-aos="fade-up">Security: To protect our resort, guests, staff, and systems from potential fraud or unauthorized access.</li>
            <li data-aos="fade-up">Legal Compliance: To comply with legal obligations, court orders, or other lawful requests for information.</li>
        </ul>

        <h2 data-aos="fade-up" class="text-sm md:text-lg sm:text-xl font-semibold mt-6 sm:mt-8 mb-2 sm:mb-4">Sharing Your Information</h2>
        <p data-aos="fade-up" class="mb-2 sm:mb-4">
            We may share your information in the following circumstances:
        </p>
        <ul  class="custom-list mb-2 sm:mb-4 space-y-1 sm:space-y-2">
            <li data-aos="fade-up">Service Providers: With third parties and partners who assist us in providing our services, such as payment processors, travel agents, or marketing platforms.</li>
            <li data-aos="fade-up">Legal Requirements: To law enforcement agencies or government authorities if required by law.</li>
            <li data-aos="fade-up">Business Transactions: In the event of a business restructuring, sale, or merger, where your information may be transferred as part of the transaction.</li>
        </ul>

        <h2 data-aos="fade-up" class="text-sm md:text-lg sm:text-xl font-semibold mt-6 sm:mt-8 mb-2 sm:mb-4">Data Security</h2>
        <p data-aos="fade-up" class="mb-2 sm:mb-4">
            The security of your information is important to us. We implement reasonable technical and organizational measures to safeguard your data from unauthorized access, use, or disclosure. However, no transmission method or electronic storage is 100% secure. While we strive to protect your information, we cannot guarantee its absolute security.
        </p>

        <h2 data-aos="fade-up" class="text-sm md:text-lg sm:text-xl font-semibold mt-6 sm:mt-8 mb-2 sm:mb-4">Retention of Your Information</h2>
        <p data-aos="fade-up" class="mb-2 sm:mb-4">
            We'll retain your personal information as per the following guidelines:
        </p>
        <ul class="custom-list mb-2 sm:mb-4 space-y-1 sm:space-y-2">
            <li data-aos="fade-up">As long as necessary to provide you services.</li>
            <li data-aos="fade-up">For compliance with legal obligations.</li>
            <li data-aos="fade-up">To resolve disputes or enforce agreements.</li>
        </ul>

        <h2 data-aos="fade-up" class="text-sm md:text-lg sm:text-xl font-semibold mt-6 sm:mt-8 mb-2 sm:mb-4">Your Rights</h2>
        <p data-aos="fade-up" class="mb-2 sm:mb-4">
            You may have the following rights regarding your personal information:
        </p>
        <ul class="custom-list mb-2 sm:mb-4 space-y-1 sm:space-y-2">
            <li data-aos="fade-up">Right to Access: To obtain a copy of the information we hold on you.</li>
            <li data-aos="fade-up">Right to Correction: To request corrections to any inaccurate information we have.</li>
            <li data-aos="fade-up">Right to Erasure: To request deletion of your data in certain circumstances.</li>
        </ul>

        <h2 data-aos="fade-up" class="text-sm md:text-lg sm:text-xl font-semibold mt-6 sm:mt-8 mb-2 sm:mb-4">Changes to This Privacy Policy</h2>
        <p data-aos="fade-up" class="mb-2 sm:mb-4">
            We may update our Privacy Policy from time to time to reflect changes in our practices or law. The "Last Updated" date at the top of this Privacy Policy indicates when it was most recently revised. We will notify you of any material changes.
        </p>

        <h2 data-aos="fade-up" class="text-sm md:text-lg sm:text-xl font-semibold mt-6 sm:mt-8 mb-2 sm:mb-4 text-red-600">Refund Policy:</h2>
        <p data-aos="fade-up" class="mb-2 sm:mb-4">
            Once the property is booked after paying advance, the paid amount is non-refundable. However, we can help you in rescheduling your stay, which is again subject to availability.
        </p>

        <h2 data-aos="fade-up" class="text-sm md:text-lg sm:text-xl font-semibold mt-6 sm:mt-8 mb-2 sm:mb-4">Contact Us</h2>
        <p class="mb-2 sm:mb-4">
            If you have questions about this Privacy Policy, please contact us at:
        </p>
        <p data-aos="fade-up" class="mb-1 sm:mb-2"><a href="mailto:thefargo.ind@gmail.com" class="text-fargo underline">thefargo.ind@gmail.com</a></p>
        <p data-aos="fade-up"><a href="tel:+91959112558" class="text-fargo underline">+91 95911 2558</a></p>

    </div>

    <!-- Reviews Section -->
    <div class="container-item mt-6 sm:mt-8 md:mt-12 lg:mt-20">
        <?php include_once 'includes/home-reviews.php'; ?>
    </div>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>
</body>

</html>

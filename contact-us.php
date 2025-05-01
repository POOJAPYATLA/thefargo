<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php';?>
    <title>Contact us</title>
    <style>
    .bg-pink {
        background: #fff9f2;
    }
    .accordion-content {
    transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
    max-height: 0;
    opacity: 0;
    overflow: hidden;
  }

  .accordion-content.open {
    max-height: 300px; 
    opacity: 1;
  }

  .accordion-toggle {
    transition: transform 0.5s ease;
  }

        .accordion-toggle.open {
            transform: translate(90deg);
        }
      
</style>

</head>

<body>
    <!-- Header -->
    <?php $isScroll = false; include_once 'includes/header.php'?>
    <!-- Header -->
      <!-- banner -->
    <div 
  class="relative flex flex-col w-full h-[70vh] mt-16 text-white bg-cover bg-center bg-no-repeat z-10"
  style="background-image: url('/assets/images/deck/deck-banner.webp');"
>
  <!-- Semi-transparent black overlay -->
  <div class="absolute inset-0 bg-black/50 z-20"></div>
</div>



<!-- heading -->
 <div class="bg-pink">
<div class="text-center pt-4 sm:mt-6 md:mt-10 py-10">
        <?php
            $title = "contact us";
            include 'includes/heading.php';
        ?>
    </div>

<!-- accordian -->
<div class="flex items-center justify-center min-h-screen">
        <div class="flex flex-col md:flex-row w-full max-w-7xl p-6 gap-3 md:gap-6">
            <!-- Left Section -->
            <div data-aos="fade-up" class="w-full md:w-1/2 p-4 left-section min-h-[600px] overflow-y-auto">
                <div class="space-y-6 px-10">
                    <!-- Accordion Item 1 -->
                    <div data-aos="fade-up"  class="border-b border-[#a98c6e]">
                        <button data-aos="fade-up" class="flex justify-between items-center w-full py-5 text-lg font-semibold text-[#a98c6e] tracking-wider" onclick="toggleAccordion(0)">
                            <span data-aos="fade-up" class="text-lg md:text-xl">FARGO DECK</span>
                            <span data-aos="fade-up" class="text-2xl font-bold text-[#a98c6e] accordion-toggle">—</span>
                        </button>
                        <div id="accordion-content-0" class="accordion-content">
                            <div class="py-5">
                              <div class="flex gap-5">
                                <div>
                                <p ><strong class=" pb-5 my-2">PHONE</strong><br>
                                <span class="text-sm md:text-lg text-fargo">+919959112558</span></p>
                                <p><strong class=" pb-5">ADDRESS</strong><br>
                                <span class="text-sm md:text-lg text-fargo">Ragala Resort Road, near In, Kondamadugu, Bagdayara, Telangana 508126</span></p>
                              
                                </div>
                                <div>
            <p><strong class=" pb-5">RESERVATION</strong><br>
            <span class="text-sm md:text-lg text-fargo">thefargo.ind@gmail.com</span></p>                   
            <p><strong class=" pb-5">SALES</strong><br>
            <span class="text-sm md:text-lg text-fargo">thefargo.ind@gmail.com</span></p>
            <p><strong class=" pb-5">LOCATION</strong><br>
            <span class="text-sm md:text-lg text-fargo"><a href="https://www.google.com/maps/place/Fargo+Deck/@17.4809455,78.755353,210m/data=!3m1!1e3!4m6!3m5!1s0x3bcb71d93cfd175f:0x9998bf9269c70c89!8m2!3d17.4810089!4d78.7555818!16s%2Fg%2F11lm2l06vr?entry=ttu&g_ep=EgoyMDI1MDQxNC4xIKXMDSoASAFQAw%3D%3D" class="underline">Click here for Maps</a></span></p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="border-b border-[#a98c6e]">
                        <button data-aos="fade-up" class="flex justify-between items-center w-full py-2 text-lg font-semibold text-[#a98c6e] tracking-wider" onclick="toggleAccordion(1)">
                            <span data-aos="fade-up"  class="text-lg md:text-xl">FARGO PORCH</span>
                            <span data-aos="fade-up" class="text-2xl font-bold text-[#a98c6e] accordion-toggle">—</span>
                        </button>
                        <div id="accordion-content-1" class="accordion-content">
                            <div class="py-5">
                            <div class="flex gap-5">
                                <div>
                                <p><strong class=" pb-5">PHONE</strong><br>
                                <span class="text-sm md:text-lg text-fargo">+919959112558</span></p>
                                <p><strong class=" pb-5">ADDRESS</strong><br>
                                <span class="text-sm md:text-lg text-fargo">Ragala Resort Road, near In, Kondamadugu, Bagdayara, Telangana 508126</span></p>
                               
                                </div>
                                <div>
            <p><strong class=" pb-5">RESERVATION</strong><br>
            <span class="text-sm md:text-lg text-fargo">thefargo.ind@gmail.com</span></p>                    
            <p><strong class=" pb-5">SALES</strong><br>
            <span class="text-sm md:text-lg text-fargo">thefargo.ind@gmail.com</span></p>
            <p><strong class=" pb-5">LOCATION</strong><br>
            <span class="text-sm md:text-lg text-fargo"><a href="https://www.google.com/maps/place/Fargo+Porch/@17.4817601,78.7559331,141m/data=!3m1!1e3!4m6!3m5!1s0x3bcb71110cba1d43:0x9e22f82e41209611!8m2!3d17.4818243!4d78.7561124!16s%2Fg%2F11l2zdq8d6?entry=tts&g_ep=EgoyMDI0MTIxMS4wIPu8ASoASAFQAw%3D%3D" class="underline">Click here for Maps</a></span></p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="border-b border-[#a98c6e]">
                        <button data-aos="fade-up" class="flex justify-between items-center w-full py-5 text-lg font-semibold text-[#a98c6e] tracking-wider" onclick="toggleAccordion(2)">
                            <span data-aos="fade-up" class="text-lg md:text-xl">FARGO VALLEY</span>
                            <span data-aos="fade-up" class="text-2xl font-bold text-[#a98c6e] accordion-toggle">—</span>
                        </button>
                        <div id="accordion-content-2" class="accordion-content">
                            <div class="py-5">
                            <div class="flex gap-5">
                                <div>
                                <p><strong class="pb-5">PHONE</strong><br>
                                <span class="text-sm md:text-lg text-fargo">+919959112558</span></p>
                                <p><strong class=" pb-5">ADDRESS</strong><br>
                                <span class="text-sm md:text-lg text-fargo">F252+R49, Cheemaldari, Telangana501111</span></p>
                                
                                </div>
                                <div>
            <p><strong class=" pb-5">RESERVATION</strong><br>
            <span class="text-sm md:text-lg text-fargo">thefargo.ind@gmail.com</span></p>                    
            <p><strong class=" pb-5">SALES</strong><br>
            <span class="text-sm md:text-lg text-fargo">thefargo.ind@gmail.com</span></p>
            <p><strong class=" pb-5">LOCATION</strong><br>
            <span class="text-sm md:text-lg text-fargo"><a href="https://www.google.com/maps/place/Fargo+Valley/@17.4595026,78.000291,122a,51.9y,2.16t/data=!3m1!1e3!4m6!3m5!1s0x3bcbe38274d6d839:0x50768679620bd38a!8m2!3d17.4595375!4d78.0003594!16s%2Fg%2F11l5k0_mjv?entry=tts&g_ep=EgoyMDI0MTIxMS4wIPu8ASoASAFQAw%3D%3D" class="underline">Click here for Maps</a></span></p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 4 -->
                    <div class="border-b border-[#a98c6e]">
                        <button data-aos="fade-up" class="flex justify-between items-center w-full py-5 text-lg font-semibold text-[#a98c6e] tracking-wider" onclick="toggleAccordion(3)">
                            <span data-aos="fade-up" class="text-lg md:text-xl">FARGO TREETOP</span>
                            <span data-aos="fade-up" class="text-2xl font-bold text-[#a98c6e] accordion-toggle">—</span>
                        </button>
                        <div id="accordion-content-3" class="accordion-content">
                            <div class="py-5">
                            <div class="flex gap-5">
                                <div>
                                <p><strong class="pb-5">PHONE</strong>
                                <br>
                                <span class="text-sm md:text-lg text-fargo">+919959112558</span></p>
                                <p><strong class=" pb-5">ADDRESS</strong><br>
                                <span class="text-sm md:text-lg text-fargo">Ragala Resort Road, near In, Kondamadugu, Bagdayara, Telangana 508126</span></p>
                             
                                </div>
                                <div>
            <p><strong class=" pb-5">RESERVATION</strong><br>
            <span class="text-sm md:text-lg text-fargo">thefargo.ind@gmail.com</span></p>                   
            <p><strong class=" pb-5">SALES</strong><br>
            <span class="text-sm md:text-lg text-fargo">thefargo.ind@gmail.com</span></p>
            <p><strong class="pb-5">LOCATION</strong><br>
            <span class="text-sm md:text-lg text-fargo"><a href="https://www.google.com/maps/place/Fargo+TreeTrop/@17.4813795,78.752299,1037m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bcb71a154b57345:0x5ab4bfe241b03159!8m2!3d17.4813744!4d78.7548739!16s%2Fg%2F11l72tjct2?entry=tts&g_ep=EgoyMDI0MTIxMS4wIPu8ASoASAFQAw%3D%3D" class="underline">Click here for Maps</a></span></p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div data-aos="fade-up" class="w-full md:w-1/2 bg-white p-6 rounded-lg shadow-md right-section min-h-[600px] flex items-center">
                <form data-aos="fade-up" method="POST" action="submit.php" class="space-y-4 w-full">
                    <div>
                        <label data-aos="fade-up" class="block text-gray-700">Name</label>
                        <input data-aos="fade-up" type="text" name="name" placeholder="Enter your name" class="w-full p-2 border rounded">
                    </div>
                    <div>
                        <label data-aos="fade-up" class="block text-gray-700">Email</label>
                        <input data-aos="fade-up" type="email" name="email" placeholder="Enter valid email" class="w-full p-2 border rounded">
                    </div>
                    <div>
                        <label data-aos="fade-up" class="block text-gray-700">Mobile</label>
                        <input data-aos="fade-up" type="tel" name="mobile" placeholder="Numbers only" class="w-full p-2 border rounded">
                    </div>
                    <div>
                        <label data-aos="fade-up" class="block text-gray-700">Message</label>
                        <textarea data-aos="fade-up" name="message" placeholder="Write your message" class="w-full p-2 border rounded h-24"></textarea>
                    </div>
                    <div class="text-center">
                        <button data-aos="fade-up" type="submit" class="text-[#a98c6e] border border-[#a98c6e] px-10 py-2 rounded tracking-wider">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>


     
 




    <!-- reviews -->
    <div class="container-item mt-12 md:mt-20">
        <?php include_once 'includes/home-reviews.php'?>
    </div>


    <!-- Content Info -->
    <?php include_once 'includes/footer.php';?>
</body>


<script>
        function toggleAccordion(index) {
            const content = document.getElementById(`accordion-content-${index}`);
            const toggle = content.previousElementSibling.querySelector('.accordion-toggle');
            
            // Close all other accordions
            document.querySelectorAll('.accordion-content').forEach((item, i) => {
                if (i !== index) {
                    item.classList.remove('open');
                    const otherToggle = item.previousElementSibling.querySelector('.accordion-toggle');
                    otherToggle.textContent = '—';
                    otherToggle.classList.remove('open');
                }
            });

            // Toggle the selected accordion
            content.classList.toggle('open');
            toggle.textContent = content.classList.contains('open') ? '|' : '—';
            toggle.classList.toggle('open');
        }
    </script>

</html>
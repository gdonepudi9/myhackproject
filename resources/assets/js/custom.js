window.addEventListener('load', function() {
    var preloader = document.getElementById('preloader');
    var mainContent = document.getElementById('main-content');

    // Set a minimum duration (e.g., 1 second) to ensure the preloader is visible long enough
    var minimumDuration = 1000; // 1 second
    var loadTime = Date.now();
    var hidePreloader = function() {
        var elapsed = Date.now() - loadTime;
        var duration = Math.max(elapsed, minimumDuration);
        setTimeout(function() {
            preloader.classList.add('hidden');
            setTimeout(function() {
                preloader.style.display = 'none';
                mainContent.style.display = 'block'; // Show the main content
            }, 300); // match the duration of the opacity transition
        }, duration - elapsed);
    };
    hidePreloader();
});
$(document).ready(function() {

    $('#receive-code').click(function() {
        $('#code-section').removeClass('dat-hidden');
    });

    $('#verify-code').click(function() {
        $(this).text('Verified').removeClass('dat-not-verified').addClass('dat-verified');
        checkVerificationStatus();
    });

    function checkVerificationStatus() {
        if ($('#verify-email').hasClass('dat-verified') && $('#verify-code').hasClass('dat-verified')) {
            $('#continue-section').removeClass('dat-hidden');
        }
    }
});
document.addEventListener("DOMContentLoaded", () => {
    function updateLocalStorageAndLog(url) {
        localStorage.setItem('redirectAfterLogin', url);
        console.log(`Updated localStorage with: ${url}`);
        document.getElementById('localStorageOutput').innerText = `Local Storage: ${localStorage.getItem('redirectAfterLogin')}`;
    }

    function setFormInputValues() {
        const redirectUrl = localStorage.getItem('redirectAfterLogin') || '/';
        console.log(`Setting form input values to: ${redirectUrl}`);

        if (document.getElementById("loginRedirectAfterLogin")) {
            document.getElementById("loginRedirectAfterLogin").value = redirectUrl;
        }

        if (document.getElementById("registerRedirectAfterLogin")) {
            document.getElementById("registerRedirectAfterLogin").value = redirectUrl;
        }
    }

    document.getElementById("freelancer-btn")?.addEventListener("click", () => {
        updateLocalStorageAndLog('/becomefreelancer');
        setFormInputValues(); // Update inputs when button is clicked
    });

    document.getElementById("join-btn")?.addEventListener("click", () => {
        updateLocalStorageAndLog('/');
        setFormInputValues(); // Update inputs when button is clicked
    });
});
document.addEventListener("DOMContentLoaded", () => {
    let popupTimer;

    function showPopup() {
        document.getElementById("overlay").style.display = "flex";
    }

    function hidePopup() {
        document.getElementById("overlay").style.display = "none";
        clearTimeout(popupTimer);
    }
    // Check if the popup has been shown before
    if (!sessionStorage.getItem("popupShown")) {
        popupTimer = setTimeout(showPopup, 2000); // Show popup after 2 seconds
    }


    // popupTimer = setTimeout(showPopup, 2000);

    document.getElementById("join-btn").addEventListener("click", () => {
        clearTimeout(popupTimer);
        showPopup();
    });
    document.getElementById("freelancer-btn")?.addEventListener("click", () => {
        clearTimeout(popupTimer);
        showPopup();
    });


    document.getElementById("close-btn").addEventListener("click", hidePopup);

    document.getElementById("signup-btn")?.addEventListener("click", () => {
        document.getElementById("signup-form").style.display = "block";
        document.getElementById("login-form").style.display = "none";
    });

    document.getElementById("login-btn")?.addEventListener("click", () => {
        document.getElementById("signup-form").style.display = "none";
        document.getElementById("login-form").style.display = "block";
    });
});
// Function to toggle checkbox state and handle button state
function toggleCheckbox(element) {
    element.classList.toggle('checked');
    updateNextButtonState();
}

// Function to update the Next button's state
function updateNextButtonState() {
    const checkboxes = document.querySelectorAll('.mini-checkbox');
    const nextButton = document.getElementById('next-btn');
    let anyChecked = Array.from(checkboxes).some(checkbox => checkbox.classList.contains('checked'));

    if (anyChecked) {
        nextButton.classList.add('active');
        nextButton.disabled = false;
    } else {
        nextButton.classList.remove('active');
        nextButton.disabled = true;
    }
}

// Function to handle the Next button click
// Function to generate a 10-character random string
function generateRandomString(length) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result = '';
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        result += characters[randomIndex];
    }
    return result;
}

function handleNext() {
    const checkboxes = document.querySelectorAll('.mini-checkbox');
    let variable = 0;

    if (checkboxes[0].classList.contains('checked')) {
        variable += 1;
    }
    if (checkboxes[1].classList.contains('checked')) {
        variable += 2;
    }

    // Generate a 10-character random string
    const randomString = generateRandomString(10);

    // Redirect to the URL with both variables
    window.location.href = `/purpose?minihkjbjxgv=${variable}&encovariable=${randomString}`;
}


// Function to close the popup (you can define this based on your needs)
function closePopup() {
    document.getElementById('popup').style.display = 'none';
}
// JavaScript to handle the click on plus signs
document.addEventListener('DOMContentLoaded', function() {
    // Toggle subcategories visibility
    document.querySelectorAll('.submenu-item').forEach(function(item) {
        item.addEventListener('click', function() {
            // Hide all submenus
            document.querySelectorAll('.submenu').forEach(function(submenu) {
                if (submenu.parentElement !== item) {
                    submenu.style.display = 'none';
                }
            });

            // Toggle the clicked submenu
            var submenu = item.querySelector('.submenu');
            if (submenu) {
                submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
            }
        });
    });
});



document.getElementById('search-button').addEventListener('click', function() {
    var query = document.getElementById('search-input').value;
    if (query) {
        var searchURL = '/search?q=' + encodeURIComponent(query);
        window.location.href = searchURL;
    }
});
// Dummy data for suggestions (Replace with your own data source)
const suggestions = [
    "Graphics & Design", "Logo & Brand Identity", "Logo Design", "Brand Style Guides",
    "Business Cards & Stationery", "Fonts & Typography", "Logo Maker Tool", "Art & Illustration",
    "Illustration", "AI Artists", "AI Avatar Design", "Children's Book Illustration",
    "Portraits & Caricatures", "Cartoons & Comics", "Pattern Design", "Tattoo Design",
    "Storyboards", "NFT Art", "Design Advice", "Web & App Design", "Website Design",
    "App Design", "UX Design", "Landing Page Design", "Icon Design", "Industrial & Product Design",
    "Character Modeling", "Game Art", "Graphics for Streamers", "Print Design", "Flyer Design",
    "Brochure Design", "Poster Design", "Catalog Design", "Menu Design", "Visual Design",
    "Image Editing", "Presentation Design", "Background Removal", "Infographic Design",
    "Vector Tracing", "Resume Design", "Marketing Design", "Social Media Design",
    "Social Posts & Banners", "Email Design", "Web Banners", "Signage Design", "Packaging & Covers",
    "Packaging & Label Design", "Book Design", "Book Covers", "Album Cover Design",
    "Architecture & Building Design", "Architecture & Interior Design", "Landscape Design",
    "Building Engineering", "Fashion & Merchandise", "T-Shirts & Merchandise", "Fashion Design",
    "Jewelry Design", "3D Design", "3D Architecture", "3D Industrial Design", "3D Fashion & Garment",
    "3D Printing Characters", "3D Landscape", "3D Game Art", "3D Jewelry Design", "Programming & Tech",
    "Website Development", "Business Websites", "E-Commerce Development", "Landing Pages",
    "Dropshipping Websites", "Build a Complete Website", "Website Platforms", "WordPress", "Shopify",
    "Wix", "Custom Websites", "GoDaddy", "Website Maintenance", "Website Customization",
    "Bug Fixes", "Backup & Migration", "Speed Optimization", "AI Development", "AI Chatbot",
    "AI Applications", "AI Integrations", "AI Agents", "AI Fine-Tuning", "Custom GPT Apps",
    "Chatbot Development", "Discord", "Telegram", "TikTok", "Facebook Messenger", "Game Development",
    "Gameplay Experience & Feedback", "PC Games", "Mobile Games", "Mobile App Development",
    "Cross-platform Development", "Android App Development", "IOS App Development",
    "Website to App", "Mobile App Maintenance", "VR & AR Development", "Cloud & Cybersecurity",
    "Cloud Computing", "DevOps Engineering", "Cybersecurity", "Data Science & ML", "Machine Learning",
    "Computer Vision", "NLP", "Deep Learning", "Software Development", "Web Applications",
    "Desktop Applications", "APIs & Integrations", "Databases", "Scripting", "Browser Extensions",
    "QA & Review", "User Testing", "Blockchain & Cryptocurrency", "Decentralized Apps (dApps)",
    "Cryptocurrencies & Tokens", "Exchange Platforms", "Electronics Engineering", "Support & IT",
    "Convert Files", "Digital Marketing", "Search Engine Optimization (SEO)", "Search Engine Marketing (SEM)",
    "Local SEO", "E-Commerce SEO", "Video SEO", "Social Media Marketing", "Paid Social Media",
    "Social Commerce", "Influencer Marketing", "Community Management", "Video Marketing",
    "E-Commerce Marketing", "Email Marketing", "Email Automations", "Guest Posting", "Affiliate Marketing",
    "Display Advertising", "Public Relations", "Text Message Marketing", "Marketing Strategy",
    "Marketing Concepts & Ideation", "Marketing Advice", "Web Analytics", "Conversion Rate Optimization (CRO)",
    "Channel Specific", "TikTok Shop", "Facebook Ads Campaign", "Instagram Marketing", "Google SEM",
    "Shopify Marketing", "Music Promotion", "Podcast Marketing", "Book & eBook Marketing",
    "Mobile App Marketing", "Crowdfunding", "Video & Animation", "Editing & Post-Production",
    "Video Editing", "Visual Effects", "Video Art", "Intro & Outro Videos", "Video Templates Editing",
    "Subtitles & Captions", "Social & Marketing Videos", "Video Ads & Commercials", "Social Media Videos",
    "UGC Videos", "Music Videos", "Slideshow Videos", "Character Animation", "Animated GIFs",
    "Animation for Kids", "Animation for Streamers", "Rigging", "NFT Animation", "Motion Graphics",
    "Logo Animation", "Lottie & Web Animation", "Text Animation", "Filmed Video Production", "Videographers",
    "Explainer Videos", "Animated Explainers", "Live Action Explainers", "Spokesperson Videos",
    "Screencasting Videos", "eLearning Video Production", "Crowdfunding Videos", "Product Videos",
    "3D Product Animation", "E-Commerce Product Videos", "Corporate Videos", "App & Website Previews",
    "AI Video", "AI Video Art", "AI Music Videos", "AI Spokespersons Videos", "Article to Video",
    "Game Trailers", "Game Recordings & Guides", "Meditation Videos", "Real Estate Promos", "Book Trailers",
    "Video Advice", "Photography", "Product Photographers", "Portrait Photographers", "Lifestyle & Fashion Photographers",
    "Local Photographers", "Writing & Translation", "Content Writing", "Articles & Blog Posts",
    "Content Strategy", "Website Content", "Scriptwriting", "Creative Writing", "Podcast Writing",
    "Speechwriting", "Research & Summaries", "Editing & Critique", "Proofreading & Editing",
    "AI Content Editing", "Book & eBook Publishing", "Book & eBook Writing", "Book Editing",
    "Beta Reading", "Self-Publish Your Book", "Career Writing", "Resume Writing", "Cover Letters",
    "LinkedIn Profiles", "Job Descriptions", "eLearning Content Development", "Technical Writing",
    "Business & Marketing Copy", "Brand Voice & Tone", "Business Names & Slogans", "Case Studies",
    "White Papers", "Product Descriptions", "Ad Copy", "Sales Copy", "Email Copy", "Social Media Copywriting",
    "Press Releases", "UX Writing", "Translation & Transcription", "Translation", "Localization",
    "Transcription", "Interpretation", "Industry Specific Content", "Business, Finance & Law", "Health & Medical",
    "Internet & Technology", "News & Politics", "Marketing", "Real Estate", "Music & Audio",
    "Music Production & Writing", "Music Producers", "Composers", "Singers & Vocalists", "Session Musicians",
    "Songwriters", "Jingles & Intros", "Custom Songs", "Audio Engineering & Post Production",
    "Mixing & Mastering", "Audio Editing", "Vocal Tuning", "Voice Over & Narration", "Voice Over",
    "Female Voice Over", "Male Voice Over", "French Voice Over", "German Voice Over", "24hr Turnaround",
    "Streaming & Audio", "Podcast Production", "Audiobook Production", "Audio Ads Production",
    "Voice Synthesis & AI", "DJing", "DJ Drops & Tags", "DJ Mixing", "Remixing", "Sound Design",
    "Meditation Music", "Audio Logo & Sonic Branding", "Custom Patches & Samples", "Audio Plugin Development",
    "Lessons & Transcriptions", "Online Music Lessons", "Music Transcription", "Music & Audio Advice",
    "Business", "Financial Services", "Accounting & Bookkeeping", "Tax Consulting", "Financial Forecasting & Modeling",
    "Analysis, Valuation & Optimization", "Personal Finance & Wealth Management", "Legal Services",
    "Applications & Registrations", "Legal Documents & Contracts", "Legal Review", "Legal Research",
    "Business Management", "Business Registration", "Business Plans", "Business Consulting",
    "Sustainability Consulting", "HR Consulting", "Market Research", "Presentations", "Supply Chain Management",
    "Project Management", "AI for Businesses", "AI Strategy", "AI Lessons", "E-Commerce Management",
    "Product Research", "Store Management", "Amazon Experts", "Shopify Experts", "Etsy Experts",
    "Data & Business Intelligence", "Data Visualization", "Data Analytics", "Data Processing", "Data Entry",
    "Data Scraping", "Data Cleaning", "Sales & Customer Care", "Sales", "Lead Generation", "Call Center & Calling",
    "Customer Care", "General & Administrative", "Virtual Assistant", "Online Investigations", "Fact Checking",
    "Software Management", "Product Management", "Event Management Consulting", "Business Consultants",
    "Legal Consulting", "Financial Consulting", "Business Consulting", "HR Consulting", "AI Consulting",
    "Business Plans", "E-commerce Consulting", "Marketing Strategy", "Content Strategy", "Social Media Strategy",
    "Influencers Strategy", "Video Marketing Consulting", "SEM Strategy", "PR Strategy", "Data Consulting",
    "Data Analytics Consulting", "Databases Consulting", "Data Visualization Consulting", "Coaching & Advice",
    "Career Counseling", "Life Coaching", "Game Coaching", "Styling & Beauty Advice", "Travel Advice",
    "Nutrition Coaching", "Mindfulness Coaching", "Tech Consulting", "Website Consulting", "Mobile App Consulting",
    "Game Development Consulting", "Software Development Consulting", "Cybersecurity Consulting", "Mentorship",
    "Marketing Mentorship", "Design Mentorship", "Writing Mentorship", "Video Mentorship", "Music Mentorship",
    "AI Services", "AI Development", "AI Applications", "AI Integrations", "AI Chatbot", "AI Agents",
    "AI Fine-Tuning", "Custom GPT Apps", "Data Science & ML", "Data Analytics", "Data Visualization",
    "AI Artists", "Midjourney Artists", "DALL-E Artists", "Stable Diffusion Artists", "All AI Art Services",
    "AI for Businesses", "AI Consulting", "AI Strategy", "AI Lessons", "AI Video", "AI Music Videos",
    "AI Video Art", "AI Spokespersons Videos", "AI Audio", "Voice Synthesis & AI", "Text to Speech",
    "AI Content", "AI Content Editing", "Custom Writing Prompts", "Personal Growth", "Self Improvement",
    "Online Tutoring", "Language Lessons", "Life Coaching", "Career Counseling", "Generative AI Lessons",
    "Fashion & Style", "Modeling & Acting", "Styling & Beauty", "Trend Forecasting", "Wellness & Fitness",
    "Fitness", "Nutrition", "Wellness", "Gaming", "Game Coaching", "eSports Management & Strategy",
    "Game Matchmaking", "Ingame Creation", "Gameplay Experience & Feedback", "Game Recordings & Guides",
    "Leisure & Hobbies", "Astrology & Psychics", "Arts & Crafts", "Cosplay Creation", "Puzzle & Game Creation",
    "Traveling", "Collectibles", "Family & Genealogy", "Cosmetics Formulation", "Greeting Cards & Videos",
    "Embroidery Digitizing"
];

const searchInput = document.getElementById('search-input');
const suggestionsDiv = document.getElementById('suggestions');

searchInput.addEventListener('input', function() {
    const query = searchInput.value.toLowerCase();
    suggestionsDiv.innerHTML = '';
    if (query) {
        const filteredSuggestions = suggestions.filter(item => item.toLowerCase().includes(query)).slice(0, 10);
        filteredSuggestions.forEach(suggestion => {
            const suggestionDiv = document.createElement('div');
            suggestionDiv.textContent = suggestion;
            suggestionDiv.addEventListener('click', () => {
                // Navigate to the search URL with the clicked suggestion
                var searchURL = '/search?q=' + encodeURIComponent(suggestion);
                window.location.href = searchURL;
            });
            suggestionsDiv.appendChild(suggestionDiv);
        });
        suggestionsDiv.style.display = 'block';
    } else {
        suggestionsDiv.style.display = 'none';
    }
});

// Hide suggestions when clicking outside
document.addEventListener('click', function(event) {
    if (!searchInput.contains(event.target) && !suggestionsDiv.contains(event.target)) {
        suggestionsDiv.style.display = 'none';
    }
});
document.addEventListener('DOMContentLoaded', function() {
    const seeMoreButton = document.getElementById('see-more');
    const seeLessButton = document.getElementById('see-less');
    const cards = Array.from(document.querySelectorAll('.my-card'));
    const initialVisibleCount = 9; // Number of cards to show initially

    // Function to update visibility of cards
    function updateCardVisibility() {
        // Hide all cards that are beyond the initial visible count
        cards.forEach((card, index) => {
            if (index >= initialVisibleCount) {
                card.classList.add('hidden');
            }
        });

        // Show "See More" button only if there are hidden cards
        if (cards.length > initialVisibleCount) {
            seeMoreButton.classList.add('show');
        }
    }

    // Function to show all cards
    function showAllCards() {
        cards.forEach(card => card.classList.remove('hidden'));
        seeMoreButton.classList.remove('show');
        seeLessButton.classList.add('show');
    }

    // Function to hide extra cards
    function hideExtraCards() {
        cards.forEach((card, index) => {
            if (index >= initialVisibleCount) {
                card.classList.add('hidden');
            }
        });
        seeLessButton.classList.remove('show');
        if (cards.length > initialVisibleCount) {
            seeMoreButton.classList.add('show');
        }
    }

    // Add event listener to the "See More" button
    seeMoreButton.addEventListener('click', showAllCards);

    // Add event listener to the "See Less" button
    seeLessButton.addEventListener('click', hideExtraCards);

    // Initialize the card visibility
    updateCardVisibility();
});
document.addEventListener('DOMContentLoaded', () => {
    const photoCards = document.querySelectorAll('.photo-card');

    photoCards.forEach(card => {
        const heartIcon = card.querySelector('.heart-icon');

        heartIcon.addEventListener('click', () => {
            heartIcon.classList.toggle('liked');
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const testimonials = document.querySelector('.testimonial-content');
    const items = document.querySelectorAll('.testimonial-item');
    let currentIndex = 0;

    function showTestimonial(index) {
        const offset = -index * 100;
        testimonials.style.transform = `translateX(${offset}%)`;
    }

    document.querySelector('.next').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % items.length;
        showTestimonial(currentIndex);
    });

    document.querySelector('.prev').addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        showTestimonial(currentIndex);
    });

    // Initial display
    showTestimonial(currentIndex);
});
document.addEventListener('DOMContentLoaded', function() {
    var categoryBtn = document.getElementById('category-btn');
    var categoryNavbar = document.getElementById('category-navbar');
    var closeCategoryBtn = document.getElementById('close-category-btn');

    categoryBtn.addEventListener('click', function() {
        categoryNavbar.classList.add('show');
        document.body.classList.add('category-navbar-open');
    });

    closeCategoryBtn.addEventListener('click', function() {
        categoryNavbar.classList.remove('show');
        document.body.classList.remove('category-navbar-open');
    });
});
$(document).ready(function(){
    $('.plus-sign').click(function() {
        $(this).next('.submenu').toggleClass('show');
    });

    $('.category-link').click(function() {
        const menuId = $(this).attr('id').replace('Dropdown', '');
        $('#dropdownMenu' + menuId).toggleClass('show');
    });

    $('.dropdown-item').click(function(event) {
        event.preventDefault();
        const query = $(this).data('query');
        if (query) {
            window.location.href = `/search?q=${encodeURIComponent(query)}`;
        }
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.my-card');
    cards.forEach(card => {
        card.addEventListener('click', () => {
            const cardText = card.querySelector('.card-text').textContent.trim();
            const query = encodeURIComponent(cardText);
            const url = `/search?q=${query}`;
            window.location.href = url;
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.cheki-card-container');
    const stacks = document.querySelectorAll('.cheki-card-stack');
    let isLargeScreen = window.innerWidth >= 992;

    // IntersectionObserver options
    const observerOptions = {
        root: container,
        rootMargin: '0px',
        threshold: 0.5
    };

    // IntersectionObserver callback
    const observerCallback = (entries) => {
        if (!isLargeScreen) { // Only apply automatic scrolling on small screens
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const stack = entry.target;
                    container.scrollTo({
                        left: stack.offsetLeft - container.offsetLeft,
                        behavior: 'smooth'
                    });
                }
            });
        }
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    // Observe only if on small screens
    if (!isLargeScreen) {
        stacks.forEach(stack => {
            observer.observe(stack);
        });
    }

    // Handle screen resize to toggle automatic scrolling
    window.addEventListener('resize', () => {
        const isLargeScreenNow = window.innerWidth >= 992;
        if (isLargeScreen !== isLargeScreenNow) {
            isLargeScreen = isLargeScreenNow;
            if (isLargeScreen) {
                container.scrollLeft = 0; // Reset scroll position on large screens
                // Disconnect the observer when on large screens
                observer.disconnect();
            } else {
                // Re-observe stacks when on small screens
                stacks.forEach(stack => {
                    observer.observe(stack);
                });
            }
        }
    });

    // Optional: Add click event to cards for navigation
    document.querySelectorAll('.cheki-card').forEach(card => {
        card.addEventListener('click', function() {
            const cardName = encodeURIComponent(this.getAttribute('data-name'));
            window.location.href = `/search?q=${cardName}`;
        });
    });
});
function updateRedirect(value) {
    document.getElementById('login-redirect').value = value;
    document.getElementById('signup-redirect').value = value;
}




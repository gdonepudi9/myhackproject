<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">
    <title>MyHackProject</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.png">
    @include("home.styles")
</head>
<body class="bg-gray-100">

@include("home.mainpreloader")

<!-- Main Content (Initially hidden) -->
<div id="main-content" class="hidden-content">
    <div class="header-container">
        @include("home.navbar")
    </div>

    @include("home.herobadge")
    <section id="features" class="py-20 text-gray-800">
    <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold mb-12 text-center">Key Features</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="card bg-white p-6 rounded-lg shadow-lg transform transition-transform hover:scale-105" data-url="/real-time-challenges">
            <h3 class="text-2xl font-semibold mb-4">Real-time Challenges</h3>
            <p class="text-gray-600">Engage with real-world scenarios and enhance your skills instantly. Experience a wide variety of challenges that push your limits.</p>
        </div>
        <div class="card bg-white p-6 rounded-lg shadow-lg transform transition-transform hover:scale-105" data-url="/resources">
            <h3 class="text-2xl font-semibold mb-4">Community Learning</h3>
            <p class="text-gray-600">Connect with fellow hackers. Share knowledge, insights, and tips to foster a collaborative learning environment.</p>
        </div>
        <div class="card bg-white p-6 rounded-lg shadow-lg transform transition-transform hover:scale-105" data-url="/performance-tracking">
            <h3 class="text-2xl font-semibold mb-4">Performance Tracking</h3>
            <p class="text-gray-600">Monitor your progress and get personalized insights to identify strengths and areas for improvement.</p>
        </div>
    </div>
</div>

<script>
    // Select all cards
    const cards = document.querySelectorAll('.card');

    // Add click event listener to each card
    cards.forEach(card => {
        card.addEventListener('click', () => {
            const url = card.getAttribute('data-url');
            window.location.href = url; // Redirect to the URL
        });
    });
</script>

</section>

<section id="testimonials" class="py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-10 text-center">User Testimonials</h2>
        <div class="max-w-3xl mx-auto bg-gray-900 text-white p-6 rounded-lg">
            <div class="flex flex-col items-center">
                <blockquote class="border-l-4 border-yellow-400 pl-4 mb-6 text-lg italic">"MyHackProject has transformed my skills!" - Jane Doe</blockquote>
                <blockquote class="border-l-4 border-yellow-400 pl-4 mb-6 text-lg italic">"The best platform for ethical hacking!" - John Smith</blockquote>
                <blockquote class="border-l-4 border-yellow-400 pl-4 text-lg italic">"I landed my dream job thanks to the challenges here!" - Alex Brown</blockquote>
            </div>
        </div>
    </div>
</section>



    <section id="blog" class="py-20 bg-white text-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center">Latest Blog Posts</h2>
            <p class="mb-6 text-center">Stay updated with the latest trends and tips in ethical hacking.</p>
            <div class="flex flex-wrap justify-around">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg m-4 flex-1 max-w-xs text-center">
                    <h3 class="text-xl font-semibold mb-2">Top 10 Ethical Hacking Tools in 2024</h3>
                    <p class="mb-4">Explore the essential tools every ethical hacker should know about.</p>
                    <a class="inline-block bg-blue-500 text-white font-semibold px-4 py-2 rounded hover:bg-blue-400 transition">Read More</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg m-4 flex-1 max-w-xs text-center">
                    <h3 class="text-xl font-semibold mb-2">How to Build Your Cybersecurity Career</h3>
                    <p class="mb-4">Get insights on how to start and grow your career in cybersecurity.</p>
                    <a class="inline-block bg-blue-500 text-white font-semibold px-4 py-2 rounded hover:bg-blue-400 transition">Read More</a>
                </div>
            </div>
        </div>
    </section>
    @if(Auth::check()) <!-- Check if the user is logged in -->
    <section id="pricing" class="py-20 bg-gray-100 text-gray-800">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-10 text-center">Choose Your Plan</h2>
        <p class="mb-6 text-center">Select the subscription that best fits your needs.</p>
        <div class="flex flex-wrap justify-around">
            <!-- Free Tier Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg m-4 flex-1 max-w-xs text-center">
                <h3 class="text-xl font-semibold mb-2">Free Tier</h3>
                <p class="mb-4">14-Day Free Trial</p>
                <p class="mb-4">Access to basic features for 14 days. No credit card required!</p>
                <a class="inline-block bg-green-500 text-white font-semibold px-4 py-2 rounded hover:bg-green-400 transition">Free trial started</a>
            </div>
            <!-- Monthly Subscription Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg m-4 flex-1 max-w-xs text-center">
                <h3 class="text-xl font-semibold mb-2">Monthly Subscription</h3>
                <p class="mb-4">$50/month</p>
                <p class="mb-4">Full access to all features, billed monthly. Cancel anytime!</p>
                <button class="inline-block bg-blue-500 text-white font-semibold px-4 py-2 rounded hover:bg-blue-400 transition" onclick="checkout('Monthly Subscription', 5000)">Subscribe Now</button>
            </div>
            <!-- Yearly Subscription Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg m-4 flex-1 max-w-xs text-center">
                <h3 class="text-xl font-semibold mb-2">Yearly Subscription</h3>
                <p class="mb-4">$1200/year</p>
                <p class="mb-4">Best value! Full access to all features, billed annually.</p>
                <button class="inline-block bg-purple-500 text-white font-semibold px-4 py-2 rounded hover:bg-purple-400 transition" onclick="checkout('Yearly Subscription', 120000)">Get Started</button>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');

        function checkout(tier, amount) {
            fetch('/create-checkout-session', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ tier: tier, amount: amount }),
            })
            .then(response => response.json())
            .then(data => {
                return stripe.redirectToCheckout({ sessionId: data.id });
            })
            .then(result => {
                if (result.error) {
                    alert(result.error.message);
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</section>

@endif

@guest
    @include("home.authpopup") <!-- Show the authentication popup if the user is not logged in -->
@endguest
    @include("home.footer")
</div>

@include("home.scripts")

</body>
</html>

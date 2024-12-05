<style>
    /* Full-width card container */
    .mbeta-card-container {
        width: 98.5vw; /* Full viewport width */
        display: flex;
        justify-content: center; /* Center the card horizontally */
        padding: 0 30px; /* Optional: Add padding for smaller screens */
        box-sizing: border-box; /* Ensure padding is included in width calculation */
        padding-top:60px;

    }

    /* Style the card */
    .mbeta-card {
        max-width: 1200px; /* Increase the maximum width as needed */
        width: 100%; /* Full width up to the max-width */
        padding: 20px; /* Adjust padding as needed */
        text-align: center;
        color: white;
        font-size: 18px;
        font-weight: bold;
        background: linear-gradient(135deg, #007acc, #00d2ff); /* Gradient for tech theme */
        transition: background 0.5s ease-in-out; /* Smooth transition */
        border-radius: 20px; /* Rounded edges with a 20px radius */
    }

    /* Italicize the text */
    .italic-side {
        font-style: italic;
    }
</style>

@guest
    <!-- Unique Card Section -->
    <div class="mbeta-card-container">
        <div class="mbeta-card">
            <p class="mbeta-card-text">
                <span class="italic-side">Unlock Your Ethical Hacking Skills Today</span>
            </p>
        </div>
    </div>
@else
    <!-- Unique Card Section -->
    <div class="mbeta-card-container">
        <div class="mbeta-card">
            <p class="mbeta-card-text">
                <span class="italic-side">Welcome to MyHackProject, <b>{{$username}}</b></span>
            </p>
        </div>
    </div>
@endguest

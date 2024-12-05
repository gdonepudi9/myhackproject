<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MyHackProject - Cybersecurity Challenge</title>
    <link rel="stylesheet" href="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7fafc;
            color: #2d3748;
        }
        .input-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: 100%;
        }
        .input-container input {
            padding: 15px;
            width: 100%;
            border: 2px solid #cbd5e0;
            border-radius: 0.375rem;
            font-size: 1rem;
        }
        .input-container input:focus {
            border-color: #4299e1;
            outline: none;
            box-shadow: 0 0 0 2px rgba(66, 153, 225, 0.5);
        }
        .submit-button {
            padding: 15px 20px;
            margin-left: 10px;
            background-color: #4299e1;
            color: white;
            border-radius: 0.375rem;
            transition: background-color 0.3s;
        }
        .submit-button:hover {
            background-color: #3182ce;
        }
        .round-button {
            background-color: #d1d5db;
            border-radius: 9999px;
            border: none;
        }
        .question-title {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        .description {
            font-size: 0.875rem;
            margin-bottom: 1rem;
            color: #4a5568;
        }
        .spinner {
            display: none;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include("home.adnav")
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card shadow-lg">
                            <div class="card-body p-6">
                                <div class="space-y-6">
                                    <!-- Challenge Introduction -->
                                    <div class="flex items-start bg-white p-4 rounded-lg shadow">
                                        <div class="flex-1">
                                            <p class="question-title">Cybersecurity Challenge</p>
                                            <p class="description">You've been tasked with breaching a simulated vulnerable web application. Find the flag hidden in the application!</p>
                                        </div>
                                    </div>

                                    <!-- Connect Section -->
                                    <div class="flex items-start bg-white p-4 rounded-lg shadow">
                                        <button type="button" class="w-8 h-8 round-button flex items-center justify-center mr-4" id="vpn-status-indicator">
                                            <svg fill="currentColor" viewBox="0 0 24 24" class="icon inline-block" id="status-circle">
                                                <circle cx="12" cy="12" r="10" class="text-gray-600 transition-colors duration-300"></circle>
                                            </svg>
                                        </button>
                                        <button id="connect-vpn" type="button" class="submit-button">
                                            Connect your VPN
                                            <svg fill="currentColor" viewBox="0 0 24 24" class="icon inline-block">
                                                <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                        <div id="spinner" class="spinner hidden"></div>
                                    </div>

                                    <div class="flex items-start bg-white p-4 rounded-lg shadow">
                                        <button id="status-button" type="button" class="w-8 h-8 round-button flex items-center justify-center mr-4">
                                            <span class="text-gray-600">⚪</span>
                                        </button>
                                        <div class="flex-1">
                                            <p class="question-title">Spawn the Machine</p>
                                            <p class="description">Click to spawn the vulnerable web application machine.</p>
                                            <div class="input-container">
                                                <button id="spawn-button" class="submit-button" disabled>
                                                    Spawn the Machine
                                                    <svg fill="currentColor" viewBox="0 0 24 24" class="icon inline-block">
                                                        <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div id="ip-message" class="mt-2 text-gray-600"></div>
                                            <div id="spawn-spinner" class="spinner hidden"></div>
                                        </div>
                                    </div>

                                    <!-- Question Section -->
                                    <div class="flex items-start bg-white p-4 rounded-lg shadow">
                                        <button id="statusButton" type="button" class="w-8 h-8 round-button flex items-center justify-center mr-4">
                                            <span class="text-gray-600">⚪</span>
                                        </button>
                                        <div class="flex-1">
                                            <p class="question-title">Question: What is the flag?</p>
                                            <p class="description">After accessing the application, find the hidden flag and enter it below:</p>
                                            <div class="input-container">
                                                <input id="flagInput" type="text" class="border border-gray-300 rounded-l flex-1 focus:outline-none focus:ring focus:ring-blue-300" placeholder="Your flag">
                                                <button id="submitButton" type="button" class="submit-button" disabled>
                                                    Submit
                                                </button>
                                                <div id="submit-spinner" class="spinner hidden"></div>
                                            </div>
                                            <p id="message" class="mt-2 text-green-500"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer mt-8">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-center text-sm-left d-block d-sm-inline-block">
                            Copyright © <a href="https://www.myhackproject.com/" target="_blank">MyHackProject</a> 2024
                        </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Cybersecurity Challenge</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/vendors/js/vendor.bundle.base.js"></script>
    <script src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/js/hoverable-collapse.js"></script>
    <script src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/js/template.js"></script>
    <script src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/js/settings.js"></script>
    <script src="https://671e71232473069ef686f9ca--aesthetic-lolly-738f7c.netlify.app/machines/js/todolist.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            let vpnConnected = false; // Track VPN connection status

            $('#connect-vpn').on('click', function() {
                const button = $(this);
                const indicator = $('#status-circle');
                $('#spinner').show();
                button.text('Connecting ...');

                let dotCount = 0;
                const interval = setInterval(() => {
                    dotCount = (dotCount + 1) % 4;
                    button.text('Connecting' + '.'.repeat(dotCount));
                }, 500);

                $.ajax({
                    url: '/connect-vpn',
                    type: 'POST',
                    data: { _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        button.text('Connected: ' + response.public_ip);
                        indicator.find('circle').attr('class', 'text-green-600 animate-pulse');
                        vpnConnected = true; // Set VPN connected status to true
                        toggleButtons(); // Update button states
                    },
                    error: function(xhr) {
                        button.text('Not connected, try again');
                        indicator.find('circle').attr('class', 'text-gray-600');
                        vpnConnected = false; // Set VPN connected status to false
                        toggleButtons(); // Update button states
                    },
                    complete: function() {
                        clearInterval(interval);
                        $('#spinner').hide();
                    }
                });
            });

            function toggleButtons() {
                $('#spawn-button').prop('disabled', !vpnConnected).fadeTo(200, vpnConnected ? 1 : 0.5);
                $('#submitButton').prop('disabled', !vpnConnected).fadeTo(200, vpnConnected ? 1 : 0.5);
            }

            // Initialize button states on page load
            toggleButtons(); 

            function showVpnAlert() {
                alert("Please connect to the VPN before proceeding.");
            }

            $('#spawn-button').click(function() {
                if (!vpnConnected) {
                    showVpnAlert();
                    return; // Exit if VPN is not connected
                }

                $('#spawn-button').fadeTo(200, 0.5); // Fade out button
                $('#spawn-spinner').show(); // Show spinner

                $.ajax({
                    url: '{{ route('spawn.machine') }}',
                    method: 'GET',
                    success: function(response) {
                        const ipAddress = response.ip; // Assuming the response contains the IP address
                        $('#ip-message').text(`The IP address ${ipAddress} spawned successfully!`);
                        $('#status-button').html('<span class="text-green-600">🟢</span>'); // Change button color to green
                        $('#status-button').fadeOut(500).fadeIn(500).fadeOut(500).fadeIn(500); // Flickering effect
                        setTimeout(function() {
                            $('#spawn-button').prop('disabled', true).text('Machine Spawned'); // Disable spawn button
                        }, 5000); // 5000 milliseconds = 5 seconds
                    },
                    error: function() {
                        $('#ip-message').text('Failed to spawn the machine.');
                    },
                    complete: function() {
                        $('#spawn-button').fadeTo(200, 1); // Fade back in button
                        $('#spawn-spinner').hide(); // Hide spinner
                    }
                });
            });

            $('#submitButton').on('click', function() {
                if (!vpnConnected) {
                    showVpnAlert();
                    return; // Exit if VPN is not connected
                }
                
                const userInput = $('#flagInput').val();
                if (!userInput) {
                    $('#message').text('Please enter a flag.');
                    return; // Exit if input is empty
                }
                $('#submit-spinner').show(); // Show spinner for submit action

                $.ajax({
                    url: '{{ route('check.flag') }}',
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({ userInput: userInput }),
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    success: function(response) {
                        $('#submit-spinner').hide(); // Hide spinner
                        if (response.status === 'success') {
                            $('#statusButton').html('<span class="text-green-600 flicker">🟢</span>');
                            $('#submitButton').text('Congratulations!');
                            $('#message').text('You got it right!');
                        } else {
                            $('#submitButton').text('Submit');
                            $('#message').text(response.message);
                        }
                    },
                    error: function(xhr) {
                        $('#submit-spinner').hide(); // Hide spinner
                        $('#submitButton').text('Submit');
                        $('#message').text('An error occurred. Please try again.');
                    },
                });
            });
        });
    </script>
</body>
</html>

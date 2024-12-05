<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
        <a class="navbar-brand logo-image" href="/"><h4 style="color:white">HACK</h3></a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>
{{--        <input type="checkbox" id="checkbox">--}}
{{--        <label for="checkbox" class="toggle">--}}
{{--            <div class="bars" id="bar1"></div>--}}
{{--            <div class="bars" id="bar2"></div>--}}
{{--            <div class="bars" id="bar3"></div>--}}
{{--        </label>--}}
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="/resources">
                    <button class="mysigninbutton" id="category-btn">Resources</button>
                </a>
                </li>
                <li class="nav-item">
                    <a href= "/real-time-challenges">
                    <button class="mysigninbutton" id="category-btn">Challanges</button>
                </a>
                </li>
                <li class="nav-item">
                <a href= "/performance-tracking">
                    <button class="mysigninbutton" id="category-btn">Rankings</button>
                </a>
                </li>

            

                @guest
                    <!-- For unauthenticated users -->
            
                    <li class="nav-item">
                        <button class="mysigninbutton" id="join-btn">JOIN</button>
                    </li>
                @else
                    <!-- For authenticated users -->
                    @if ($status == 1)
                        <li class="nav-item">
                            <a href="/profile" class="profile-link">
                                @if ($profilepicture)
                                    <img src="products/profilepicture/{{ $profilepicture }}" alt="Profile Picture" loading="lazy" class="profile-pic">
                                @else
                                    <div style="background: #0f6674" class="profile-initials">{{$firstLetter}}</div>
                                @endif
                            </a>
                        </li>
                    @elseif($status == 3)
                        <li class="nav-item">
                            <a href="/profile" class="profile-link">
                                @if ($profilepicture)
                                    <img src="products/profilepicture/{{ $profilepicture }}" alt="Profile Picture" loading="lazy" class="profile-pic">
                                @else
                                    <div style="background: #0f6674" class="profile-initials">{{$firstLetter}}</div>
                                @endif
                            </a>
                        </li>
{{--                    @elseif($status == NULL)--}}

                    @else
                    
                        <li class="nav-item">
                            <a href="/profile" class="profile-link">
                                @if ($profilepicture)
                                    <img src="products/profilepicture/{{ $profilepicture }}" alt="Profile Picture" loading="lazy" class="profile-pic">
                                @else
                                    <div style="background: #0f6674" class="profile-initials">{{$firstLetter}}</div>
                                @endif
                            </a>
                        </li>

                    @endif
{{--                    <li class="nav-item">--}}
{{--                        <a href="/profile" class="profile-link">--}}
{{--                            @if ($profilepicture)--}}
{{--                                <img src="products/profilepicture/{{ $profilepicture }}" alt="Profile Picture" loading="lazy" class="profile-pic">--}}
{{--                            @else--}}
{{--                                <div style="background: #0f6674" class="profile-initials">{{$firstLetter}}</div>--}}
{{--                            @endif--}}
{{--                            <span class="profile-text">{{ $username }}</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                @endguest
            </ul>
        </div>
    </div>
</nav>

<style>
    /* From Uiverse.io by vinodjangid07 */
    #checkbox {
        display: none;
    }

    .toggle {
        position: relative;
        width: 40px;
        height: 40px;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2px;
        gap: 10px;
        transition-duration: .5s;
    }

    .bars {
        width: 100%;
        height: 4px;
        background-color: rgb(176, 92, 255);
        border-radius: 4px;
    }

    #bar2 {
        transition-duration: .8s;
    }

    #bar1,#bar3 {
        width: 70%;
    }

    #checkbox:checked + .toggle .bars {
        position: absolute;
        transition-duration: .5s;
    }

    #checkbox:checked + .toggle #bar2 {
        transform: scaleX(0);
        transition-duration: .5s;
    }

    #checkbox:checked + .toggle #bar1 {
        width: 100%;
        transform: rotate(45deg);
        transition-duration: .5s;
    }

    #checkbox:checked + .toggle #bar3 {
        width: 100%;
        transform: rotate(-45deg);
        transition-duration: .5s;
    }

    #checkbox:checked + .toggle {
        transition-duration: .5s;
        transform: rotate(180deg);
    }
    .profile-pic {
        width: 40px; /* Adjust as needed */
        height: 40px; /* Adjust as needed */
        border-radius: 50%;
        object-fit: cover; /* Ensures the image maintains aspect ratio */
        margin-right: 8px; /* Space between image and text */
    }

    .profile-initials {
        width: 40px; /* Same as profile picture width */
        height: 40px; /* Same as profile picture height */
        border-radius: 50%;
        background-color: #007bff; /* Background color for initials */
        color: white; /* Text color */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px; /* Adjust as needed */
        margin-right: 8px; /* Space between initials and text */
    }

    .profile-link {
        display: flex;
        align-items: center; /* Aligns the image/initials and text vertically */
    }

    .profile-text {
        font-size: 14px; /* Adjust font size as needed */
        color: white;
    }
</style>

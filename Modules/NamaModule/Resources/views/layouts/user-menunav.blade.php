<nav class="navbar navbar-expand-sm navbar-light">
    <ul class="navbar-nav ">
        <li class="nav-item bg-primary active">
            <a class="nav-link textblack" href="{{ url('/namamodule') }}">Home</a>

        </li>

        <li class="nav-item bg-danger active">
            <a class="nav-link text-black" href="{{ route('user.insertdata') }}">Submit Data</a>
        </li>
        <li class="nav-item bg-primary active">
            <a class="nav-link text-black" href="{{ route('user.readdata') }}">Read Data</a>
        </li>
    </ul>
</nav>
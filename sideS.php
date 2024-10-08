<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sidebar Navigation</title>
<style>
    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidebar a {
        padding: 10px 15px;
        text-decoration: none;
        font-size: 18px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }

    .openbtn {
        font-size: 25px;
        cursor: pointer;
        background-color: transparent;
        color: white;
        padding: 10px 15px;
        border: none;
        position: fixed;
        top: 0px;
        right:1298px;
        z-index: 2;
        transition: 0.3s;
    }

    .openbtn:hover {
        background-color: transparent;
    }

    @media screen and (max-height: 450px) {
        .sidebar { padding-top: 15px; }
        .sidebar a { font-size: 18px; }
    }
</style>
</head>
<body>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var sidebar = document.createElement('div');
    sidebar.id = 'mySidebar';
    sidebar.className = 'sidebar';

    var openButton = document.createElement('button');
    openButton.className = 'openbtn';
    openButton.innerHTML = '☰';
    openButton.addEventListener('click', function() {
        if (sidebar.style.width === '250px') {
            closeNav();
        } else {
            openNav();
        }
    });

    var backLink = document.createElement('a');
    backLink.href = 'javascript:history.back()';
    backLink.innerHTML = 'BACK';

    var bookingLink = document.createElement('a');
    bookingLink.href = 'add_newbooking(new).php';
    bookingLink.innerHTML = 'BOOKING';

    var customerLink = document.createElement('a');
    customerLink.href = 'search_cust.php';
    customerLink.innerHTML = 'CUSTOMER';

    var canceledBookingLink = document.createElement('a');
    canceledBookingLink.href = 'cancel_list.php';
    canceledBookingLink.innerHTML = 'CANCELED BOOKING';

    var HomeLink = document.createElement('a');
    HomeLink.href = 'menu_staff.php';
    HomeLink.innerHTML = 'HOME';

    var logoutLink = document.createElement('a');
    logoutLink.href = 'logout.php'; // Link to the logout PHP script
    logoutLink.innerHTML = 'LOGOUT';

    sidebar.appendChild(backLink);
    sidebar.appendChild(bookingLink);
    sidebar.appendChild(customerLink);
    sidebar.appendChild(canceledBookingLink);
    sidebar.appendChild(HomeLink);
    sidebar.appendChild(logoutLink);

    document.body.appendChild(sidebar);
    document.body.appendChild(openButton);

    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        openButton.innerHTML = '×';
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        openButton.innerHTML = '☰';
    }
});
</script>

</body>
</html>

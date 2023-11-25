<link rel="shortcut icon" href="image/trevelogo.png" type="image/x-icon">
<style>
    .scroll-animation{
        position: fixed;
        width: 100%;
        top: 0;
    }
    .top{
        margin-top: 50px;
    }
</style>
<div style="width:100%;">
    <img src="image/ankor3.jpg" alt="" width="295px">
    <img src="image/sea3.jpg" alt="" width="295px">
    <img src="image/hotel4.jpg" alt="" width="295px" height="196px">
    <img src="image/mondulkirivist.png" alt="" width="295px" height="196px">
</div>
<div style="width: 100%; background-color: #004151; height: 50px; display: flex; justify-content: space-between; align-items: center; transition: all 0.5s ease;" id="nav">
    <div>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="home.php" style="color: white; text-decoration: none;">Home</a>
        &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="hplacetovisit" style="color: white; text-decoration: none;">Places to Visit</a>
        &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="hTourPackage.php" style="color: white; text-decoration: none;">Package Tours</a>
        &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="hHotels.php" style="color: white; text-decoration: none;">Hotel</a>
        &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="hTransportation.php" style="color: white; text-decoration: none;">Transportation</a>
    </div>
    <div>
        <button style="width: 100px; height: 30px; border: none; background-color: #0B5179; margin-right: 20px; border-radius: 5px;">
            <a href="adminlog.html" style="color: white; text-decoration: none; font-size: 15px; font-family: serif;">Login</a>
        </button>
    </div>
</div>
<script>
    window.addEventListener('scroll', function () {
    const navbar = document.getElementById('nav');
    const container = document.getElementById('main');
    const scrollY = window.scrollY;

    if (scrollY > 200) {
        navbar.classList.add('scroll-animation');
        container.classList.add('top');
    } else {
        navbar.classList.remove('scroll-animation');
        container.classList.remove('top');
    }
});
</script>
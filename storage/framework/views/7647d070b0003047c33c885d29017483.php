<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Perpustakaan</h3>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Master</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="<?php echo e(URL::to("admin/anggota/create")); ?>">Anggota</a>
                </li>
                <li>
                    <a href="<?php echo e(URL::to("admin/buku/create")); ?>">Buku</a>
                </li>
                <li>
                    <a href="#">Petugas</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">About</a>
            
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
       
        <li>
            <a href="http://127.0.0.1:8000/" class="article">Logout</a>
        </li>
       
    </ul>
</nav><?php /**PATH D:\laragon\www\perpustakaan\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>
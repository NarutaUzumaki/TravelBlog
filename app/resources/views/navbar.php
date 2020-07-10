<?php
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/article">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if($_SESSION['user'][0]['is_admin'] == 1): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/create">Create article</a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="/usersList">Users</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="/signOut">
            <a class="nav-link disabled" href="#"><?php echo ($_SESSION['user'][0]['name']); ?></a>
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Sign out</button>
        </form>
    </div>
</nav>

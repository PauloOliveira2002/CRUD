<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <a class="navbar-brand" href="/players">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <div class="dropdown mr-2"> <!-- Players -->
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Players
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item <?php if(Request::is('players')): ?> active <?php endif; ?> " href="/players">Players List</a>
                    <a class="dropdown-item <?php if(Request::is('players/create')): ?> active <?php endif; ?> " href="/players/create">Add Player</a>
                </div>
            </div>
            <div class="dropdown ml-2"> <!-- PETS -->
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Pets
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item <?php if(Request::is('pets')): ?> active <?php endif; ?> " href="/pets">Pets List</a>
                    <a class="dropdown-item <?php if(Request::is('pets/create')): ?> active <?php endif; ?> " href="/pets/create">Add Pet</a>
                </div>
            </div>
            
        </ul>
        <form class="form-inline my-2 my-lg-0" action="<?php echo e(route('search')); ?>" method="GET">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav><?php /**PATH C:\Users\Paulo\Desktop\curso\laravel\exercicio_reformados\resources\views/master/header.blade.php ENDPATH**/ ?>
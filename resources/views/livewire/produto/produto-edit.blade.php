<div>
    <nav class="navbar bg-1 fg-2">
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn-outline theme-success" type="submit">Search</button>
            </form>
        </div>
        <div>
            <form wire:submit="salvar">
                <input type="text" wire:model="nome">
                <input type="number" wire:model="preco">
                <input type="number" wire:model="quantidade">

                <button type="submit">Salvar</button>
            </form>
        </div>
    </nav>
</div>

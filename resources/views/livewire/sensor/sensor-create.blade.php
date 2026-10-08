    <div class="container-fluid p-0 min-vh-100" style="background-color: #f8f9fa;">

    <div class="d-flex" style="min-height: 100vh;">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-white border-end" style="width: 260px; min-height: 100vh;">
            <div class="d-flex align-items-center mb-4 px-2" style="height: 50px;">
                <a class="navbar-brand fw-bold fs-4 text-uppercase" style="color: #71b3f5;">HOME</a>
            </div>
            <ul class="nav nav-pills flex-column mb-auto gap-1">
                <li><a href="/dashboard" class="nav-link custom-link"><i
                            class="bi bi-house-door me-3 fs-5"></i><span>Dashboard</span></a></li>
                <li><a href="/ambiente/create" class="nav-link custom-link"><i
                            class="bi bi-house me-3 fs-5"></i><span>Ambiente</span></a></li>
                <li><a href="/sensor/create" class="nav-link custom-link active"><i
                            class="bi bi-globe me-3 fs-5"></i><span>Sensor</span></a></li>
                <li><a href="#" class="nav-link custom-link"><i
                            class="bi bi-book-fill me-3 fs-5"></i><span>Registro</span></a></li>
        </div>


        <div class="flex-grow-1 d-flex flex-column">
            <nav class="navbar navbar-light bg-white px-4 border-bottom" style="height: 74px;">
                <div class="container-fluid d-flex align-items-center justify-content-between p-0">
                    <div class="search-wrapper" style="width: 350px;">
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0 text-muted rounded-start-pill ps-3">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text"
                                class="form-control bg-light border-0 rounded-end-pill py-2 shadow-none"
                                placeholder="Pesquisar...">
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <a href="/login" class="text-decoration-none">
                            <button class="btn btn-link p-0 text-secondary border-0 fs-5">
                                <i class="bi bi-box-arrow-right"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </nav>


            <div class="p-4 p-md-5 flex-grow-1">
                <div class="rounded-4 p-4 mb-4 d-flex align-items-center justify-content-between"
                    style="background-color: #9ab0e4;">
                    <div>
                        <h4 class="fw-bold mb-1" style="color: #f4f1f8;">Cadastro do sensor</h4>
                        <p class="mb-0" style="color: #e1e1ec; font-size: 0.9rem;">Preencha os campos abaixo</p>
                    </div>
                    <i class="bi bi-person-badge-fill d-none d-md-block"
                        style="font-size: 4rem; color: #010d7d; opacity: 0.4;"></i>
                </div>


                @if (session()->has('sucesso'))
                    <div class="alert alert-success rounded-4 text-center mb-4">{{ session('sucesso') }}</div>
                @endif


                <div class="card border-0 shadow-sm rounded-4 bg-white p-4 p-md-5">

                    <form wire:submit.prevent="store">


                        <h6 class="fw-bold text-uppercase mb-3 pb-2 border-bottom" style="color: #5a9de0;">
                            <i class="bi bi-person-fill me-2"></i>Dados
                        </h6>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-secondary">CÓDIGO</label>
                            <input type="text"
                                class="form-control rounded-pill border-light-subtle py-2 @error('nome') is-invalid @enderror"
                                wire:model='nome' style="background-color: #fcfcfc;">
                            @error('nome')
                                <div class="invalid-feedback ps-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label small fw-bold text-secondary">TIPO</label>
                            <input type="text"
                                class="form-control rounded-pill border-light-subtle py-2 @error('descricao') is-invalid @enderror"
                                wire:model='descricao' style="background-color: #fcfcfc;">
                            @error('descricao')
                                <div class="invalid-feedback ps-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label small fw-bold text-secondary">DESCRIÇÃO</label>
                            <input type="text"
                                class="form-control rounded-pill border-light-subtle py-2 @error('status') is-invalid @enderror"
                                wire:model='status' style="background-color: #fcfcfc;">
                            @error('status')
                                <div class="invalid-feedback ps-3">{{ $message }}</div>
                            @enderror
                        </div>
                         <div class="col-md-6 mb-3">
                            <label class="form-label small fw-bold text-secondary">STATUS</label>
                            <input type="text"
                                class="form-control rounded-pill border-light-subtle py-2 @error('status') is-invalid @enderror"
                                wire:model='status' style="background-color: #fcfcfc;">
                            @error('status')
                                <div class="invalid-feedback ps-3">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn w-50 rounded-pill py-2 shadow-sm fw-bold text-white"
                                style="background-color: #5661ff;">
                                <span wire:loading.remove>Finalizar Cadastro</span>
                                <span wire:loading>
                                    <span class="spinner-border spinner-border-sm me-2"></span>Salvando...
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

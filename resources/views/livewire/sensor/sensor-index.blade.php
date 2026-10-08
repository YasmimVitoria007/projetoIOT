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

            <div class="mt-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID do ambiente</th>
                                    <th>Código</th>
                                    <th>Tipo</th>
                                    <th>Descrição</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($sensors as $s)
                                    <tr>
                                        <td>{{ $s->id }}</td>
                                        <td>{{ $s->$ambiente->id }}</td>
                                        <td>{{ $s->nome }}</td>
                                        <td>{{ $s->codigo }}</td>
                                        <td>{{ $s->tipo }}</td>
                                        <td>{{ $s->descricao }}</td>
                                        <td><input class="form-check-input" type="checkbox" role="switch"
                                                id="status-{{ $s->id }}" wire:click="status({{ $s->id }})"
                                                @checked($s->status)>

                                            <span class="badge bg-{{ $s->status ? 'success' : 'danger' }}">
                                                {{ $s->status ? 'ATIVO' : 'INATIVO' }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('ambiente.edit', ['id' => $s->id]) }}"
                                                class="btn btn-primary btn-sm">Editar</a>

                                            <button wire:click='delete({{ $s->id }})'
                                                class="btn btn-sm btn-danger">Excluir</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


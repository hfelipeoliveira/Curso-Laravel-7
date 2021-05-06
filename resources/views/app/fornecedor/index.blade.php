<h3>Fornecedor</h3>


@php
    
    

@endphp

@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
    Fornecedor: {{ $fornecedor['nome'] }}
    <br/>
    Status: {{ $fornecedor['status'] }}
    <br/>
    CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não preenchido' }}
    <br/>
    Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
    <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse

@endisset
<br/>

@for($i = 0; $i < 10; $i++)
    {{ $i }} <br/>
@endfor
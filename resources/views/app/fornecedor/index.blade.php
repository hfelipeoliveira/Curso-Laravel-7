<h3>Fornecedor</h3>


@php
    
    

@endphp

@isset($fornecedores)

    @for($i = 0; isset($fornecedores[$i]); $i++)
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br/>
    Status: {{ $fornecedores[$i]['status'] }}
    <br/>
    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não preenchido' }}
    <br/>
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
    <hr>
    @endfor

@endisset
<br/>

@for($i = 0; $i < 10; $i++)
    {{ $i }} <br/>
@endfor
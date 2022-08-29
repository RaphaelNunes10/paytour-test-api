<body>
    <div>
        <h1 style="color: red">
            Olá {{ $primeiroNome }},
        </h1>
        <p>
            Aqui estão as informações do seu curriculum cadastrado:    
        </p>

        <p>
            <ul>
                <li>
                    <strong>Nome:</strong> {{ $nome }}
                </li>
                <li>
                    <strong>Telefone:</strong> {{ $telefone }}
                </li>
                <li>
                    <strong>Cargo:</strong> {{ $cargo }}
                </li>
                <li>
                    <strong>Escolaridade:</strong> {{ $escolaridade }}
                </li>
            </ul>
        </p>

        <p>
            <strong>Observações:</strong>
            <br/>
            {{ $obs }}
        </p>
    </div>
</body>

<style>
    ul {
        list-style: none;
    }

    ul li::before {
        content: "\2022";
        color: red;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }

    strong {
        color: red;
    }
</style>
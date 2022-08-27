<body>
    <div>
        <h1 style="color: red">
            Olá {{ $curriculum.nome }},
        </h1>
        <p>
            Aqui estão as informações do seu curriculum cadastrado:     
        </p>

        <p>
            <ul>
                <li>
                    <strong>Nome:</strong> {{ $curriculum.nome }}
                </li>
                <li>
                    <strong>Telefone:</strong> {{ $curriculum.telefone }}
                </li>
                <li>
                    <strong>Cargo:</strong> {{ $curriculum.cargo }}
                </li>
                <li>
                    <strong>Escolaridade:</strong> {{ $curriculum.escolaridade }}
                </li>
            </ul>
        </p>

        <p>
            <strong>Observações:</strong>
            <br/>
            {{ $curriculum.obs }}
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
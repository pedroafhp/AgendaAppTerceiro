<x-layout titulo="Cadastrar">
    <form action="cadastrar/salvar" method="GET">
        @crsf <!-- Libera as portas de cadastro -->
        
        <label name="dataCompromisso">Data Compromisso</label>
        <input type="date" name="dataEvento">
        <br><br>

       <label name="descricao">Descrição</label>
       <textArea type="text" name="descricaoTexto"></textArea>
       <br><br>

        <button type="submit">Salvar</button>
    </form><br>
    <a href="/index"><button>Voltar</button></a>
</x-layout>
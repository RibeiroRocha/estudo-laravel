<h2> Deseja mesmo excluir a pessoa '{{ $pessoa->nome}}'?</h2>
<a href="/pessoas">cancelar</a>

<form action="/pessoas/{{ $pessoa->id }}" method="post">
    @method('DELETE')
    @csrf
    <input type="submit" value="Sim, Excluir">
</form>

<nav class="navbar navbar-dark bg-dark">
<a href="{{ route('Frutas.create') }}">Create Fruta</a>
&nbsp;&nbsp;
<a href="{{ route('Frutas.index') }}">Read Fruta</a>
&nbsp;&nbsp;
<a href="{{ route('Frutas.update', $fruta->id) }}">Update Fruta</a>
&nbsp;&nbsp;
<a href="{{ route('Frutas.destroy', $fruta->id) }}">Delete Fruta</a>
</nav>
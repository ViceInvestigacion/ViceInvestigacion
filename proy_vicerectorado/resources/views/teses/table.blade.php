<table class="table table-responsive" id="teses-table">
    <thead>
        <th>Tesis</th>
        <th>Facultad</th>
        <th>Escuela</th>
        <th>Fecha</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($teses as $tesis)
        <tr>
            <td>{!! $tesis->tesis !!}</td>
            <td>{!! $tesis->facultad !!}</td>
            <td>{!! $tesis->escuela !!}</td>
            <td>{!! $tesis->fecha !!}</td>
            <td>
                {!! Form::open(['route' => ['teses.destroy', $tesis->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('teses.show', [$tesis->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('teses.edit', [$tesis->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
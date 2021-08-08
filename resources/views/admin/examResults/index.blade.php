@extends('layouts.admin')
@section('content')
@can('exam_result_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.exam-results.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.examResult.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'ExamResult', 'route' => 'admin.exam-results.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.examResult.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ExamResult">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.student') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.student') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.math') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.database') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.programming_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.software_engineer') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.computer_science') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.total') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.rating') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.database_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.programming_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.statistics') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.selected') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.project') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.total_p') }}
                        </th>
                        <th>
                            {{ trans('cruds.examResult.fields.overall_rating') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($users as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($examResults as $key => $examResult)
                        <tr data-entry-id="{{ $examResult->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $examResult->id ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->student->name ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->student->student ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->math ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->database ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->programming_1 ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->software_engineer ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->computer_science ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->total ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->rating ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->database_2 ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->programming_2 ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->statistics ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->selected ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->project ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->total_p ?? '' }}
                            </td>
                            <td>
                                {{ $examResult->overall_rating ?? '' }}
                            </td>
                            <td>
                                @can('exam_result_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.exam-results.show', $examResult->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('exam_result_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.exam-results.edit', $examResult->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('exam_result_delete')
                                    <form action="{{ route('admin.exam-results.destroy', $examResult->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('exam_result_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.exam-results.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-ExamResult:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection
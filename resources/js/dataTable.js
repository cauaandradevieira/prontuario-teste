import $ from 'jquery';
import 'datatables.net-bs5';
import 'datatables.net-responsive-bs5';
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css'; // CSS
import 'datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css'; // CSS responsivo


$( () => {
  $('#data-table').DataTable({
    responsive: true,
    language: {
        decimal: ",",
        thousands: ".",
        processing: "Processando...",
        search: "Buscar:",
        lengthMenu: "Mostrar _MENU_ registros",
        info: "",
        infoEmpty: "Mostrando 0 até 0 de 0 registros",
        infoFiltered: "(filtrado de _MAX_ registros no total)",
        loadingRecords: "Carregando...",
        zeroRecords: "Nenhum registro encontrado",
        emptyTable: "Nenhum dado disponível na tabela",
        aria: {
          sortAscending: ": ativar para ordenar a coluna em ordem crescente",
          sortDescending: ": ativar para ordenar a coluna em ordem decrescente"
        }
      }
  });
});

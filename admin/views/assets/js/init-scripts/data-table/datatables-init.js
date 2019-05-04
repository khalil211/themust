(function ($) {
    //    "use strict";


    /*  Data Table
    -------------*/

    $('#bootstrap-data-table').DataTable({
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
    });

    $('#bootstrap-data-table-export').DataTable({
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Toutes"]],
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
	    language: {
		    "sProcessing": "Traitement en cours ...",
		    "sLengthMenu": "Afficher _MENU_ lignes",
		    "sZeroRecords": "Aucun résultat trouvé",
		    "sEmptyTable": "Aucune donnée disponible",
		    "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
		    "sInfoEmpty": "Aucune ligne affichée",
		    "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
		    "sInfoPostFix": "",
		    "sSearch": "Chercher:",
		    "sUrl": "",
		    "sInfoThousands": ",",
		    "sLoadingRecords": "Chargement...",
		    "oPaginate": {
		      "sFirst": "Premier", "sLast": "Dernier", "sNext": "Suivant", "sPrevious": "Précédent"
		    },
		    "oAria": {
		      "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
		    }
		}
    });

	$('#row-select').DataTable( {
        initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);

							column
								.search( val ? '^'+val+'$' : '', true, false )
								.draw();
						} );

					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					} );
				} );
			}
		} );

})(jQuery);

/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Aluno #' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

/**
 * Passa os dados do pagamento para o Modal, e atualiza o link para exclusão
 */
$('#deletepag-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Pagamento #' + id);
  modal.find('#confirm').attr('href', 'deletePag.php?id=' + id);
})

/**
 * Passa os dados do usuario para o Modal, e atualiza o link para exclusão
 */
$('#deleteuser-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Usuário #' + id);
  modal.find('#confirm').attr('href', 'deleteUser.php?id=' + id);
})

/**
 * Passa os dados do treino para o Modal, e atualiza o link para exclusão
 */
$('#deletetreino-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  
  var modal = $(this);
  modal.find('.modal-title').text('Excluir Treino #' + id);
  modal.find('#confirm').attr('href', 'deleteTreino.php?id=' + id);
})

/**
 * Passa os dados do treino experimental para o Modal, e atualiza o link para exclusão
 */
$('#deleteexp-modal').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Treino Experimental #' + id);
  modal.find('#confirm').attr('href', 'deleteExperimental.php?id=' + id);
})

/**
 * Realiza a validação de CPF com a mascara
 */
function ValidaCPF(){ 
    var cpfaluno=document.getElementById("cpfaluno").value; 
    var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/;   
    if (cpfValido.test(cpfaluno) == true)  { 
    console.log("CPF VALIDO");
    } else  {  
    alert("CPF Inválido");  
    }
      }
    function fMascCPF(objeto,mascara) {
      obj=objeto
      masc=mascara
    setTimeout("Masc()",1)
    }

      function Masc() {
      obj.value=masc(obj.value)
    }

     function mCPF(cpf){
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return cpf
    }

    function ValidaCPFPag(){ 
    var cpfpag=document.getElementById("cpfpag").value; 
    var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/;   
    if (cpfValido.test(cpfpag) == true)  { 
    console.log("CPF VALIDO");
    } else  {  
    alert("CPF Inválido");  
    }
      }
    function fMascCPF(objeto,mascara) {
      obj=objeto
      masc=mascara
    setTimeout("Masc()",1)
    }

      function Masc() {
      obj.value=masc(obj.value)
    }

     function mCPF(cpf){
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return cpf
    }

/**
 * Realiza a validação do telefone com a mascara
 */
 function ValidaTELEFONE(){ 
    var telefone =document.getElementById("RegraTelefone").value;
      var regex = new RegExp('^\\(((1[1-9])|([2-9][0-9]))\\)((3[0-9]{3}-[0-9]{4})|(9[0-9]{3}-[0-9]{5}))$'); 
      if (regex.test(telefone)) { 
        console.log("Válido");
      }
      else alert("TELEONE INVALIDO");
         }


    function fMascTEL(objeto,mascara) {
      obj=objeto
      masc=mascara
    setTimeout("Masc()",1)
    }

      function Masc() {
      obj.value=masc(obj.value)
    }

     function mTEL(tel){
    tel=tel.replace(/\D/g,"")
    tel=tel.replace(/(\d{2})(\d)/,"($1)$2")
    tel=tel.replace(/(\d{4})(\d)/,"$1-$2")
    tel=tel.replace(/(\d{4})(\d{1,2})$/,"$1$2")
    return tel
    }

/**
 * Realiza a validação do celular com a mascara
 */
 function ValidaCELULAR(){  
    var celular =document.getElementById("RegraCelular").value;
      var regex = new RegExp('^\\(((1[1-9])|([2-9][0-9][0-9]))\\)((3[0-9]{3}-[0-9]{4})|(9[0-9]{3}-[0-9]{5}))$'); 
      if (regex.test(celular)) { 
        console.log("Válido");
      }
      else alert("CELULAR INVALIDO");
         }


    function fMascCEL(objeto,mascara) {
      obj=objeto
      masc=mascara
    setTimeout("Masc()",1)
    }

      function Masc() {
      obj.value=masc(obj.value)
    }

     function mCEL(tel){
    tel=tel.replace(/\D/g,"")
    tel=tel.replace(/(\d{2})(\d)/,"($1)$2")
    tel=tel.replace(/(\d{4})(\d)/,"$1-$2")
    tel=tel.replace(/(\d{4})(\d{1,2})$/,"$1$2")
    return tel
    }

    function ValidaCEP(){ 
    var RegraValida=document.getElementById("RegraCEP").value; 
    var cpfValido = /^(([0-9]{5}-[0-9]{3})|([0-9]{11}))$/;    
    if (cpfValido.test(RegraValida) == true)  { 
    console.log("CEP VALIDO");
    } else  {  
    alert("CEP Inválido");  
    }
      }
    function fMascCEP(objeto,mascara) {
      obj=objeto
      masc=mascara
    setTimeout("Masc()",1)
    }

      function Masc() {
      obj.value=masc(obj.value)
    }

     function mCEP(cpf){
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{5})(\d)/,"$1$2")
    
    cpf=cpf.replace(/(\d{3})(\d{1,3})$/,"$1-$2")
    return cpf
    }

    function mascaraData( campo, e )
    {
      var kC = (document.all) ? event.keyCode : e.keyCode;
      var data = campo.value;
      
      if( kC!=8 && kC!=46 )
      {
        if( data.length==2 )
        {
          campo.value = data += '/';
        }
        else if( data.length==5 )
        {
          campo.value = data += '/';
        }
        else
          campo.value = data;
      }
    }

var esconde = function(){$('.alert').fadeTo(2000, 500).slideUp(500, function(){ $('.alert').slideUp(500);});};
//var esconde = function(){setTimeout(function(){ $('.alert').css('display','none') }, 3000);}
esconde()

//alterei aqui!


$(document).ready(function() {
    $('#usuarios').DataTable({
            "dom": 'rftip',
            "order": [0, "asc"],
            "columnDefs": 
              [{ "orderable": false, "targets": [3] }],
            "responsive": true,
            "pageLength": 10,
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                }
            }
        })

    $('#treinos').DataTable({
            "dom": 'rftip',
            "order": [0, "asc"],
            "columnDefs": 
              [{ "orderable": false, "targets": [3] }],
            "responsive": true,
            "pageLength": 10,
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                }
            }
        })

    $('#pagamentos').DataTable({
            "dom": 'rftip',
            "order": [0, "asc"],
            "columnDefs": 
              [{ "orderable": false, "targets": [4] }],
              "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                    if ( aData[3] == "Atrasado")
                    {
                        $('td', nRow).css('background-color', '#fa8181');
                    }
                    else if ( aData[3] == "Pago" )
                    {
                        $('td', nRow).css('background-color', '#81f79f');
                    }
               },
            "responsive": true,
            "pageLength": 10,
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                }
            }
        })

    $('#experimental').DataTable({
            "dom": 'rftip',
            "order": [0, "asc"],
            "columnDefs": 
              [{ "orderable": false, "targets": [3] }],
            "responsive": true,
            "pageLength": 10,
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                }
            }
        })

    $('#alunos').DataTable({
            "dom": 'rftip',"order": [0, "asc"],
            "columnDefs": 
              [{ "orderable": false, "targets": [3] }],
            "responsive": true,
            "pageLength": 10,
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                }
            }
        })

    $('#usuario').on('change',function(){
      var usuario = $(this).val()
      dados = { "usuario": usuario}
      $('.msg2').css('display','block')
      $.ajax({
        url: '../ajax/usuarios.php',
        data: dados,
        method: "POST",
        error: function() {
          alert('Erro ao tentar ação!');
        },
        success: function(result) {
        
          if(result == 0){
            setTimeout(function(){
              $('.msg').html('usuário liberado')
              $('#usuario').css('border','solid 1px green')
            },1000)
          }else{
            $('#usuario').focus()
            setTimeout(function(){
              $('.msg').html('usuário em uso')
              $('#usuario').css('border','solid 1px red')
            },1000)
          }
        },
        beforeSend: function() {
          setTimeout(function(){$('.msg2').css('display','none')},1000)
        }
      });
    })

    //Alunos
    $('#cpfaluno').on('change',function(){
      var cpfaluno = $(this).val()
      dados = { "cpfaluno": cpfaluno}
      $('.msg2').css('display','block')
      $.ajax({
        url: '../ajax/alunos.php',
        data: dados,
        method: "POST",
        error: function() {
          alert('Erro ao tentar ação!');
        },
        success: function(result) {
        
          if(result == 0){
            setTimeout(function(){
              $('.msg').html('cpf liberado')
              $('#cpfaluno').css('border','solid 1px green')
            },1000)
          }else{
            $('#cpfaluno').focus()
            setTimeout(function(){
              $('.msg').html('cpf em uso')
              $('#cpfaluno').css('border','solid 1px red')
            },1000)
          }
        },
        beforeSend: function() {
          setTimeout(function(){$('.msg2').css('display','none')},1000)
        }
      });
    })

    //Pagamentos
    $('#cpfpag').on('change',function(){
      var cpfpag = $(this).val()
      dados = { "cpfpag": cpfpag}
      $('.msg2').css('display','block')
      $.ajax({
        url: '../ajax/pagamentos.php',
        data: dados,
        method: "POST",
        error: function() {
          alert('Erro ao tentar ação!');
        },
        success: function(result) {
        console.log(result)
          if(result == 1){
            setTimeout(function(){
              $('.msg').html('cpf liberado')
              $('#cpfpag').css('border','solid 1px green')
            },1000)
          }else{
            $('#cpfpag').focus()
            setTimeout(function(){
              $('.msg').html('cpf não encontrado')
              $('#cpfpag').css('border','solid 1px red')
            },1000)
          }
        },
        beforeSend: function() {
          setTimeout(function(){$('.msg2').css('display','none')},1000)
        }
      });
    })

    //Treinos
    $('#cpftreino').on('change',function(){
      var cpftreino = $(this).val()
      dados = { "cpftreino": cpftreino}
      $('.msg2').css('display','block')
      $.ajax({
        url: '../ajax/treinos.php',
        data: dados,
        method: "POST",
        error: function() {
          alert('Erro ao tentar ação!');
        },
        success: function(result) {
        console.log(result)
          if(result == 1){
            setTimeout(function(){
              $('.msg').html('cpf liberado')
              $('#cpftreino').css('border','solid 1px green')
            },1000)
          }else{
            $('#cpftreino').focus()
            setTimeout(function(){
              $('.msg').html('cpf não encontrado')
              $('#cpftreino').css('border','solid 1px red')
            },1000)
          }
        },
        beforeSend: function() {
          setTimeout(function(){$('.msg2').css('display','none')},1000)
        }
      });
    })

  });

function hexToRgbA(hex){
    var c;
    if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
        c= hex.substring(1).split('');
        if(c.length== 3){
            c= [c[0], c[0], c[1], c[1], c[2], c[2]];
        }
        c= '0x'+c.join('');
        return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',0.5)';
    }
    throw new Error('Bad Hex');
}

jQuery('.on-hover').hover(

  function() {
    var bg = hexToRgbA( jQuery( this ).data('bg') );
	jQuery( this ).attr('style', 'background-color: ' + bg +'; ');
  }, function() {
    jQuery( this ).removeAttr('style');
  }

);

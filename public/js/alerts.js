function showSong(value)
{
    let songName = value.songName;
    let songDuration = value.songDuration;
    let songLyrics = value.songLyrics;

    var textoFormateado = songLyrics.replace(/[A-Z]/g, function(match) {
        return '\n' + match;
      });
    var lineas = textoFormateado.split('\n');
    lineas.shift();
    var textoSinPrimeraLinea = lineas.join('\n');
    console.log(textoSinPrimeraLinea);

    Swal.fire({
        title: '<strong><pre><code>'+ songName + '</code></pre></strong>',
        text: 'Duración: ' + songDuration,
        input: 'textarea',
        inputLabel: 'Letra',
        inputValue:textoFormateado,
        inputAttributes: {
            rows: 5,
            style: 'border: 1px solid red; font-size: 16px;',
            disabled: true
        },
        showCloseButton: true,
        focusConfirm: false,
      });
}
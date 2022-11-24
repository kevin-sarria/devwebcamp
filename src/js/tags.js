(
    function() {
        
        const tagsInput = document.querySelector('#tags_input');

        if( tagsInput ) {
            
            let tags = [];
            const tagsDiv = document.querySelector('#tags');
            const tagsInputHidden = document.querySelector('[name="tags"]');

            // Escuchar los cambios en el Input
            tagsInput.addEventListener('keypress', guardarTag);

            function guardarTag(e) {
                
                if( e.keyCode === 44 || e.keyCode === 13 ) {

                    e.preventDefault();

                    if( e.target.value.trim() === '' || e.target.value < 1 ) {
                        return;
                    }

                    tags = [ ...tags, e.target.value.trim() ];
                    tagsInput.value = '';
                    
                    mostrarTags();

                }
            }


            function mostrarTags() {

                tagsDiv.textContent = '';

                tags.forEach( tag => {
                    const etiqueta = document.createElement('LI');
                    etiqueta.classList.add('formulario__tag');
                    etiqueta.textContent = tag;
                    etiqueta.ondblclick = eliminartag;
                    tagsDiv.appendChild(etiqueta);
                } );

                actualizarInputHidden();

            }

            function eliminartag(e) {
                e.target.remove();
                
                tags = tags.filter( tag => tag !== e.target.textContent );

            }

            function actualizarInputHidden() {
                tagsInputHidden.value = tags.toString();
            }

        }

    }
)();
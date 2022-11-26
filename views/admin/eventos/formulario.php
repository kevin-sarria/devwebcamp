<fieldset class="formulario__fieldset">

    <legend class="formulario__legend">Información Evento</legend>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre Evento</label>
        <input
            type="text"
            class="formulario__input"
            id="nombre"
            name="nombre"
            placeholder="Nombre Evento"
            value="<?php echo $evento->nombre ?? ''; ?>"
        />
    </div>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Descripción</label>
        <textarea
            class="formulario__input"
            id="descripcion"
            name="descripcion"
            rows="8"
            placeholder="Descripcion Evento"
            value="<?php echo $evento->descripcion ?? ''; ?>"
        ></textarea>
    </div>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Categoria o Tipo de Evento</label>
        <select name="categoria_id" id="categoria" class="formulario__select">
            <option value="0">-- Seleccione una Opción --</option>
            <?php foreach($categorias as $categoria): ?>
                <option <?php echo ( $evento->categoria_id === $categoria->id) ? 'selected' : ''; ?> value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Selecciona el Día</label>
        <div class="formulario__radio">
            <?php foreach( $dias as $dia ): ?>

                <div>
                    <label for="<?php echo strtolower($dia->nombre); ?>"><?php echo $dia->nombre; ?></label>
                    <input 
                        type="radio"
                        id="<?php echo strtolower($dia->nombre); ?>"
                        name="dia"
                        value="<?php echo $dia->id; ?>"
                    />
                </div>

            <?php endforeach; ?>
        </div>

        <input type="hidden" name="dia_id" value="">

    </div>


    <div id="horas" class="formulario__campo">

        <label for="hora" class="formulario__label">Seleccionar Hora</label>
        <ul id="horas" class="horas">
            <?php foreach( $horas as $hora ): ?>

                <li data-hora-id="<?php echo $hora->id; ?>" class="horas__hora horas__hora--deshabilitada"><?php echo $hora->hora; ?></li>

            <?php endforeach; ?>
        </ul>

        <input type="hidden" name="hora_id" value="">

    </div>


</fieldset>


<fieldset class="formulario__fieldset">

    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="ponentes" class="formulario__label">Ponente</label>
        <input
            type="text"
            class="formulario__input"
            id="ponentes"
            placeholder="Buscar Ponente"
        />
    </div>

    <div class="formulario__campo">
        <label for="disponibles" class="formulario__label">Lugares Disponibles</label>
        <input
            type="number"
            min="1"
            class="formulario__input"
            id="disponibles"
            name="disponibles"
            placeholder="Ej. 20"
            value="<?php echo $evento->disponibles ?? ''; ?>"
        />
    </div>

</fieldset>
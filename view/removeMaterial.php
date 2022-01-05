<?php   include '../template/header.html';
        include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <div class="row">
            <h2 class="center-align">Retirar material</h2>
        </div>

        <div class="row">
            <form class="col s12 ">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">title</i>
                        <select>
                            <option value="" disabled selected>Selecione o material</option>
                            <option value="" data-icon="data:image/jpeg;base64,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" class="left">Escova</option>
                            <option value="" data-icon="https://static.paodeacucar.com/img/uploads/1/40/565040.jpg" class="left">Detergente</option>
                            <option value="" data-icon="data:image/jpeg;base64,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" class="left">Lápis</option>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Solicitado por...</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">pin</i>
                        <input id="last_name" type="number" class="validate">
                        <label for="last_name">Quantidade</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 center">
                        <button type="submit" class="waves-effect waves-light btn-large pink">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../template/footer.html'; ?>
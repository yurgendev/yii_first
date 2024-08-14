<div class="admin-default-index">
    <div class="jumbotron">
        <h1 class="display-4">Добро пожаловать в Админ Панель!</h1>
        <p class="lead">Это учебный проект на PHP Yii2.</p>
        <hr class="my-4">
        <p>
            Вы находитесь в действии "<?= $this->context->action->id ?>".
            Это действие принадлежит контроллеру "<?= get_class($this->context) ?>"
            в модуле "<?= $this->context->module->id ?>".
        </p>
        <p class="lead">
            <a id="celebrate-button" class="btn btn-primary btn-lg" href="#" role="button">Узнать больше</a>
        </p>
    </div>
    <div class="alert alert-info" role="alert">
        Вы можете настроить эту страницу, отредактировав следующий файл:<br>
        <code><?= __FILE__ ?></code>
    </div>
</div>

<style>
    .admin-default-index {
        text-align: center;
        padding: 50px;
    }
    .jumbotron {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 10px;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .alert-info {
        margin-top: 20px;
    }
</style>

<!-- Подключение библиотеки Confetti.js -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
<script>
    document.getElementById('celebrate-button').addEventListener('click', function(event) {
        event.preventDefault();
        confetti({
            particleCount: 100,
            spread: 70,
            origin: { y: 0.6 }
        });
    });
</script>
<div class="modal fade delete-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-body">
            Вы действительно хотите удалить?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            <button type="button" class="btn btn-primary modal-btn-delete" data-dismiss="modal">Удалить</button>
        </div>
    </div>
  </div>
</div>

<div class="modal fade edit-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            Заполните следующие поля
        </div>
        <div class="modal-body">
            <input type="text" class="form-control skillText" placeholder="Название навыка">
            <textarea class="form-control skillDesc" rows="3" placeholder="Описание"></textarea>
            <label>
                <input type="checkbox" class="skillAppoint">
                Можно оценивать
            </label>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            <button type="button" class="btn btn-primary modal-btn-save" data-dismiss="modal">Сохранить</button>
        </div>
    </div>
  </div>
</div>
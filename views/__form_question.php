<div class="form-01 consult-form js-consult-form__content">
  <h2 class="form-01__title"><?= $l['Your_contact_details'] ?></h2>
  <form class="form-01__form jsa__form_question">
    <div class="form__item form__item--03">
      <input type="text" name="name" placeholder="<?= $l['Your_name'] ?>"/>
    </div>
    <div class="form__item form__item--03">
      <input type="text" name="phone" placeholder="<?= $l['Phone'] ?>"/>
    </div>
    <div class="form__item form__item--03">
      <input type="email" name="email" placeholder="Email"/>
    </div>
    <div class="form__item">
      <textarea rows="3" name="message" placeholder="<?= $l['Description_of_the_problem'] ?>"></textarea>
    </div>
    <div class="form__button"><a class="btn btn-primary jsa__send_mail btn-w180" href="#"><?= $l['Send_data'] ?></a>
    </div>
  </form>
</div>
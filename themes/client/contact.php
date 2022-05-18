<div class="p-20">
    <div class="col-4  m-a box-shadow1 b-r-10">
        <div class="p-20-30">
            <div class="p-l-10">
                <h2>Get in touch</h2>
            </div>
            <div class="contact-form">
                <div class="form">
                    <?php 
                    $form = Form::begin('/dev/contact', 'post');
                    echo $form::field('name')->placeholder('Enter your name');
                    echo $form::field('email')->placeholder('Enter your email');
                    echo $form::field('number')->value('+254 ')->placeholder('Number');
                    ?>
                    <div class="p-t-3">
                        <textarea name="" id="" class="h-100 w-p-100 p-10"></textarea>
                    </div>
                    <div class="btn p-t-30">
                        <button id="contact" type="submit" class="p-15-25 b-one bg-inherit">Get in touch</button>
                    </div>
                    <?php $form::end()?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'paginas/comun/header.php';
?>
<script>
    $(document).ready(function () {
<?php
    session_start();
if (isset($_SESSION['error'])) {
        $errorMessage = $_SESSION['error'];
        session_unset();
        session_destroy();
        echo '$(\'#errorModal\').modal();';
    }else if (isset ($_SESSION['mensaje'])) {
        $mensajeMessage = $_SESSION['mensaje'];
        unset($_SESSION['mensaje']);
        echo '$(\'#mensajeModal\').modal();';
    }
?>
        
    });


</script>
<section id="sectionNormal">
    <img id="icono" src="./Img/metal.png">
    <!-- lorem ipsum NO ABRIR -->
    <p>


        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt nibh a nulla pulvinar dignissim. Integer a accumsan turpis, ut aliquet neque. Pellentesque mauris arcu, pellentesque vel blandit ac, condimentum et ex. Cras a dignissim nisi. Pellentesque ac ex felis. Nam eget augue id justo lobortis suscipit nec in urna. Sed iaculis lacinia tellus eget egestas. Aliquam orci dui, dapibus dapibus blandit nec, consectetur vitae felis. Suspendisse cursus, nisl ac eleifend auctor, neque purus efficitur metus, in vestibulum sem nibh eu augue. Aliquam sollicitudin maximus luctus. Nullam vitae tempus lorem, sed condimentum velit. Quisque in ex fringilla, mollis ex quis, rutrum lacus.

        Quisque risus risus, ullamcorper eu sodales eu, consequat a purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non nisi velit. Suspendisse sed hendrerit erat, non cursus quam. In vel lectus sed nulla imperdiet vestibulum. Maecenas nec sodales velit. Nam posuere suscipit imperdiet. Donec dictum libero quis pellentesque mollis. Mauris at scelerisque tortor, nec vestibulum nisi. Duis suscipit turpis elementum, iaculis diam nec, molestie dui. Vestibulum arcu sapien, posuere vitae nibh non, hendrerit interdum velit. In porttitor mollis massa eu faucibus. Morbi vel sem ullamcorper lectus feugiat venenatis eget id risus. Nunc eleifend purus sit amet turpis auctor elementum ut non tellus. Cras rhoncus enim nec arcu dapibus, at egestas risus malesuada.

        Praesent ac quam ac eros bibendum tincidunt at at erat. Morbi eu egestas arcu. Integer magna neque, dapibus quis nulla eu, scelerisque dapibus lectus. Curabitur ornare, felis non elementum porta, ante erat commodo dolor, non dignissim diam nibh euismod mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc quam neque, facilisis sit amet purus varius, laoreet iaculis elit. Aliquam lobortis commodo fermentum. Donec ornare lobortis dapibus. Duis id risus in dui mollis posuere id ut ex. Morbi convallis urna in ligula luctus interdum. Etiam posuere velit nec sapien imperdiet, eu porta velit viverra.

        Suspendisse euismod cursus erat, sed molestie dolor rhoncus sit amet. Duis ac cursus orci. Suspendisse porttitor quam in lobortis finibus. Nam vitae tristique velit. Curabitur sit amet dignissim nisl. Sed imperdiet, eros eu scelerisque malesuada, nunc justo gravida ante, et vehicula magna massa id eros. Vestibulum mi est, vestibulum sit amet viverra sed, posuere quis mauris. Vivamus fringilla pulvinar mauris, ut venenatis magna dictum mollis. Sed odio velit, egestas sed laoreet in, tincidunt sit amet metus. Pellentesque quam ipsum, finibus ut leo venenatis, pharetra hendrerit nunc. Praesent rhoncus a ex a molestie. Pellentesque pharetra in risus scelerisque ultrices. Duis non imperdiet enim. Cras tellus nulla, volutpat vel aliquet a, rhoncus at libero.

        Mauris lorem dolor, lacinia sit amet felis et, condimentum finibus mi. In hendrerit dui vel leo finibus, ut convallis quam blandit. Proin non tincidunt erat. Nullam non odio ultricies, pulvinar tortor sit amet, ullamcorper arcu. Etiam non nunc facilisis, eleifend quam ac, convallis magna. Quisque pellentesque eu diam a euismod. Aliquam egestas sagittis purus, nec hendrerit nunc tristique et. Etiam euismod ex metus, vel tincidunt justo porta vel. Donec suscipit risus nec nunc ullamcorper, gravida hendrerit magna auctor. Morbi ac tincidunt diam. Etiam ac nisi ut nulla malesuada malesuada ut mollis nisl. Curabitur sed sapien mattis, efficitur eros id, efficitur erat. Aenean scelerisque imperdiet neque, sit amet mollis augue convallis id. Pellentesque ullamcorper faucibus aliquam.

        In et elementum odio, non vehicula augue. Nulla at dolor et purus maximus faucibus. Etiam condimentum non orci ac eleifend. Nulla pretium at dui a rhoncus. Mauris aliquet tempor velit in pretium. Vestibulum vulputate congue quam eu lacinia. Nulla varius condimentum mauris at euismod. In hac habitasse platea dictumst. Morbi mattis tortor vel vulputate commodo. Sed dignissim nulla in nibh varius ultricies. Fusce odio eros, tempus et ultrices ac, pretium eu elit. Fusce blandit eros sit amet justo rhoncus pharetra nec in dolor. Cras sit amet erat nec odio hendrerit venenatis in in lorem. Phasellus tincidunt, lacus vitae molestie luctus, nibh nisi tristique purus, id condimentum libero velit eu nisi. Mauris faucibus risus scelerisque consequat aliquam. Nam consectetur feugiat sodales.

        Morbi consequat nibh id ante volutpat volutpat. Sed sed dolor turpis. Nunc nec lacus non sapien scelerisque consectetur ultricies at libero. Duis porta, lectus et dictum hendrerit, purus urna consectetur lectus, in imperdiet urna mi sit amet metus. Donec est neque, dignissim nec malesuada commodo, aliquam sit amet diam. Suspendisse urna erat, maximus in massa sit amet, pulvinar pellentesque mi. Suspendisse vitae quam enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi a tellus id justo porttitor maximus vel ut mi. Sed euismod tortor non venenatis convallis. Praesent at velit in lectus suscipit blandit.

        Nullam molestie malesuada rutrum. Quisque ullamcorper nibh mollis sagittis congue. In in enim augue. Duis aliquet vulputate facilisis. Etiam efficitur a neque quis elementum. Duis sollicitudin a neque et laoreet. Cras id erat posuere, dapibus nisl ultricies, euismod est. Pellentesque sagittis elementum erat eget gravida. Aenean aliquet risus ut tellus sollicitudin eleifend. Duis malesuada tempus libero, sit amet imperdiet nulla congue eu. Etiam lacinia erat nec cursus lobortis. Ut fermentum, nulla et vehicula finibus, est lacus tristique mauris, sit amet sodales lacus ipsum at tellus.

        Nulla leo tortor, molestie nec suscipit ac, rhoncus rutrum dui. Vestibulum ut malesuada sapien. Proin tristique velit sed nisi dignissim, accumsan interdum ipsum hendrerit. Mauris at luctus arcu. Integer quis scelerisque nulla, sit amet pretium elit. Pellentesque tempor id ligula a blandit. In porttitor vestibulum ligula sit amet ullamcorper. Curabitur posuere, velit ac feugiat laoreet, augue dolor sagittis nisi, eget laoreet metus est et leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent risus lectus, congue quis auctor at, dignissim eu orci.

        Nam congue sapien non dolor interdum, eget dignissim turpis ultrices. Fusce in neque mi. In et lacus sed ex accumsan congue ac eu velit. Curabitur mi leo, aliquam vel dignissim gravida, semper vitae dui. Pellentesque vehicula, lectus eleifend euismod suscipit, sem ante commodo urna, sed lobortis nunc orci sed est. Curabitur augue tortor, posuere in suscipit a, rutrum maximus magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel posuere tortor. Etiam vitae dui quis nunc luctus rutrum. Vivamus ultricies id odio ac efficitur. Integer rutrum magna id vestibulum sagittis.

        Morbi in tempor tellus. Sed nec sapien erat. Phasellus tincidunt hendrerit venenatis. Proin porttitor tortor nibh. Cras nec erat tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet, quam vel tristique vestibulum, lectus metus euismod purus, quis venenatis elit nisl eget mi. Proin pretium volutpat mi dictum faucibus. Duis eu convallis libero, eu gravida turpis. Etiam faucibus tempus dui, sed aliquam quam egestas at. Ut feugiat massa lorem, vitae tincidunt arcu congue ac. Nunc dolor ante, pulvinar at nunc a, gravida pulvinar nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in turpis diam.

        Nam fringilla tortor vel metus consectetur, a efficitur quam iaculis. Donec urna eros, aliquam vitae mollis non, sollicitudin eget lectus. In id metus non lacus ornare vehicula non vel odio. Cras mollis, libero vitae efficitur dapibus, lectus dui mollis magna, nec aliquam enim purus a nisi. Vivamus imperdiet et odio ac dignissim. Praesent dignissim elit eget est dictum feugiat. Mauris rhoncus tincidunt enim, a tempus libero rutrum ac.

        Vestibulum et accumsan urna. Aenean urna felis, consectetur quis arcu et, pellentesque laoreet nisl. In hendrerit dui vel nunc feugiat, non convallis tortor accumsan. Quisque ornare elementum mauris sed vestibulum. In eu consectetur elit. Aenean dictum mi eget diam vehicula fermentum. Cras turpis neque, dignissim eu ullamcorper vitae, hendrerit et sem. Quisque vitae mattis odio. Donec ut risus elementum, congue nisl blandit, sagittis tellus. In hac habitasse platea dictumst.

        Nulla id urna metus. Fusce quis dolor egestas, ornare quam quis, consectetur odio. Integer elementum magna eu quam sollicitudin placerat. Nulla facilisi. Ut egestas sollicitudin felis. Sed a feugiat mi. Aenean imperdiet lectus quis est faucibus, vel ultrices ex convallis. Pellentesque eget faucibus nibh.

        Maecenas ut quam erat. Nullam pellentesque sem non tristique dictum. Nunc tincidunt aliquam ex nec fringilla. Nam congue, augue aliquet euismod pulvinar, massa neque laoreet ante, vel venenatis tellus nulla sed velit. In suscipit rutrum sem vestibulum pellentesque. Mauris ac semper turpis, vel sodales tortor. Quisque at mollis lorem. Fusce pulvinar in est eget bibendum.

        Aliquam vestibulum orci erat, scelerisque elementum justo venenatis vel. Morbi ut mi dui. Mauris sit amet posuere velit. Nam elementum turpis turpis, non molestie nunc dictum eu. Nunc laoreet nisi ac faucibus semper. Integer dictum porttitor metus. Praesent tempor justo auctor orci ornare, at pretium est maximus. In hac habitasse platea dictumst. Donec nec facilisis enim. Phasellus congue ipsum sed faucibus suscipit.

        Praesent eu dui metus. Donec neque mauris, laoreet vel sodales ac, ullamcorper vitae magna. Etiam id dictum arcu. In libero lectus, sagittis at nunc ac, finibus semper dui. Quisque in gravida massa. Nam cursus, urna sit amet rhoncus finibus, dolor urna consectetur augue, in egestas dolor velit et quam. Cras ut malesuada dui. Morbi nec ligula eget mauris posuere placerat laoreet at velit. Duis venenatis tellus quis mi luctus, et commodo tortor ultrices. Nulla justo nisl, venenatis vitae lorem vitae, scelerisque cursus nunc. Etiam eleifend nulla turpis. Aliquam tincidunt dui ac turpis lacinia, eget egestas magna ullamcorper. Nullam massa diam, iaculis eu eleifend vitae, hendrerit vitae elit. Sed sit amet diam at quam aliquam tincidunt.

        Nam et sapien vestibulum, sodales lectus et, lobortis tellus. Donec pellentesque velit ut pretium fringilla. Nunc tristique, justo at feugiat maximus, leo mi sollicitudin ipsum, vitae semper diam nunc vel mauris. Nullam sit amet tincidunt felis, et facilisis dolor. Donec placerat magna mi, quis iaculis nunc pretium ut. Nunc quis ex nec augue euismod lobortis. Suspendisse aliquet id nisl non tempus. Duis ut rhoncus libero. Nunc vel sollicitudin neque. Vivamus bibendum velit quam, in mattis sem egestas vel. Vivamus dignissim egestas tellus, in porta libero. Morbi luctus augue a enim dictum mattis. Nam mi ipsum, tincidunt vel sodales ut, hendrerit sed ligula. Nunc iaculis nisi hendrerit, ultrices eros porttitor, luctus massa. Donec ultricies tellus et mauris lobortis fringilla.

        Curabitur id velit neque. Praesent euismod porttitor turpis, nec auctor magna placerat vitae. Vivamus non urna gravida, lobortis nisl sit amet, condimentum mi. Nunc imperdiet posuere metus a laoreet. Sed pellentesque velit sit amet tempus maximus. Ut nec elit justo. Sed ac suscipit lacus. In eget lacus faucibus, semper nulla vitae, imperdiet tellus. Nunc metus leo, luctus nec eleifend vitae, sodales non turpis. Aenean molestie gravida eros, sed blandit purus bibendum eget. Nulla convallis tempor metus sit amet ultricies. Fusce sed risus vitae ligula varius eleifend. Aenean porttitor malesuada venenatis. Vestibulum rutrum dui sit amet magna interdum, nec suscipit justo tempus. In semper scelerisque dui, sed maximus ligula accumsan et. Aliquam in ante molestie, interdum quam vitae, scelerisque quam.

        Nullam feugiat ex et diam euismod, sed molestie ante mattis. Nullam eleifend ante sit amet nulla interdum, vel bibendum est dictum. Suspendisse ut imperdiet lectus. In maximus orci finibus, fermentum lectus interdum, dictum erat. Ut laoreet eu elit nec ultricies. Praesent lacinia eros nisi, vitae iaculis ante ullamcorper sit amet. Morbi facilisis bibendum dapibus. Duis commodo odio varius, finibus est ut, pellentesque leo. Quisque fringilla eros lorem, in pulvinar risus egestas a. Donec diam metus, fringilla nec tempus id, imperdiet ac elit. In varius ultricies enim, vel faucibus erat. Donec commodo malesuada ex at aliquam. Nulla commodo dapibus fringilla. Praesent nec mollis ante. 
    </p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53282.388094769325!2d-70.64432335263024!3d-33.41935288022844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf661261cd99%3A0x2b4cf68f78bcf52f!2sBillboard+-+M%C3%BAsica%2C+CDs%2C+vinilos%2C+y+BluRays!5e0!3m2!1ses-419!2scl!4v1526166699657" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<?php
include 'paginas/comun/footer.php';
?>
<article>
    <div class="wrapper">
        <h1>[title]</h1>
        <h2>[subTitle]</h2>
        <img src="./assets/img/[img].jpg" alt="Image de montagne" class="art-img">
        <hr>
        <p class="art-content">
            [content]
        </p>
    </div>
</article>

<script>

    let element = document.getElementsByClassName('art-content');
    element[0].innerHTML = '<div>coucou je suis du JS !</div>';

</script>
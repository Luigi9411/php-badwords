<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
       $paragrafy = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Blanditiis quas, omnis a placeat perspiciatis molestiae rem saepe non ab sed!
        Dolor consectetur veniam ea officiis aliquam earum esse accusamus? Amet?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Blanditiis quas, omnis a placeat perspiciatis molestiae rem saepe non ab sed!
        Dolor consectetur veniam ea officiis aliquam earum esse accusamus? Amet?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Blanditiis quas, omnis a placeat perspiciatis molestiae rem saepe non ab sed!
        Dolor consectetur veniam ea officiis aliquam earum esse accusamus? Amet?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Blanditiis quas, omnis a placeat perspiciatis molestiae rem saepe non ab sed!
        Dolor consectetur veniam ea officiis aliquam earum esse accusamus? Amet?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Blanditiis quas, omnis a placeat perspiciatis molestiae rem saepe non ab sed!
        Dolor consectetur veniam ea officiis aliquam earum esse accusamus? Amet?';
        $word= $_GET['word'];
        ?>
    <p><?php echo $paragrafy;?></p>
    <h6><?php echo strlen($paragrafy); ?></h6>
    <form action="" method="get">
        <label for="word">Word</label>
        <input type="text" id="word" name="word">
        <button>Nascondi</button>
    </form>
    <p><?php echo str_replace($word,"(***)",$paragrafy); ?></p>
    <h6><?php echo strlen(str_replace($word,"(***)",$paragrafy)); ?></h6>
</body>
</html>


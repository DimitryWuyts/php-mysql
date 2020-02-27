<?php


class getData extends connection
{

    public function getName()
    {
        $sql = "SELECT * FROM student_table";
        $stmt = $this->connect()->query($sql);

        //fetch data
        while ($row = $stmt->fetch()) {
            echo '<hr>';
            echo $row['firstName'] . '<br>';
            echo $row['userName'] . '<br>';
            echo $row['preferred_language'] . '<br>';
            echo $row['email'] . '<br>';

        }
    }


    public function getUserStmt($firstName, $lastName, $userName, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor)
    {
        $sql = "SELECT * FROM student_table WHERE firstName = ? AND lastName =? AND userName =? AND linkedin =? AND github=? AND email =? AND preferred_language =? AND avatar =? AND  video =? AND quote = ? AND quote_author =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $userName, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['first_name'] . '<br>';
            echo $name['last_name'] . '<br>';
            echo $name['username'] . '<br>';
        }
    }


    public function setUserStmt($firstName, $lastName, $userName, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor)
    {
        $sql = "INSERT INTO student_table(firstName,lastName,userName,linkedin, github, email, preferred_language, avatar,video, quote ,quote_author)VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $userName, $linkedin, $github, $email, $preferredLanguage, $avatar, $video, $quote, $quoteAuthor]);

    }

    function getInfoPrepared()
    {
    }
}

<!--/**-->
<!--* mutator method for tweet date-->
<!--*-->
<!--* @param \DateTime|string|null $newTweetDate tweet date as a DateTime object or string (or null to load the current time)-->
<!--* @throws \InvalidArgumentException if $newTweetDate is not a valid object or string-->
<!--* @throws \RangeException if $newTweetDate is a date that does not exist-->
<!--**/-->
<!--public function setTweetDate($newTweetDate = null) : void {-->
<!--// base case: if the date is null, use the current date and time-->
<!--if($newTweetDate === null) {-->
<!--$this->tweetDate = new \DateTime();-->
<!--return;-->
<!--}-->
<!---->
<!--// store the like date using the ValidateDate trait-->
<!--try {-->
<!--$newTweetDate = self::validateDateTime($newTweetDate);-->
<!--} catch(\InvalidArgumentException | \RangeException $exception) {-->
<!--$exceptionType = get_class($exception);-->
<!--throw(new $exceptionType($exception->getMessage(), 0, $exception));-->
<!--}-->
<!--$this->tweetDate = $newTweetDate;-->
<!--}-->
<!---->
<!--/**-->
<!--* gets all Tweets-->
<!--*-->
<!--* @param \PDO $pdo PDO connection object-->
<!--* @return \SplFixedArray SplFixedArray of Tweets found or null if not found-->
<!--* @throws \PDOException when mySQL related errors occur-->
<!--* @throws \TypeError when variables are not the correct data type-->
<!--**/-->
<!--public static function getAllTweets(\PDO $pdo) : \SPLFixedArray {-->
<!--// create query template-->
<!--$query = "SELECT tweetId, tweetProfileId, tweetContent, tweetDate FROM tweet";-->
<!--$statement = $pdo->prepare($query);-->
<!--$statement->execute();-->
<!---->
<!--// build an array of tweets-->
<!--$tweets = new \SplFixedArray($statement->rowCount());-->
<!--$statement->setFetchMode(\PDO::FETCH_ASSOC);-->
<!--while(($row = $statement->fetch()) !== false) {-->
<!--try {-->
<!--$tweet = new Tweet($row["tweetId"], $row["tweetProfileId"], $row["tweetContent"], $row["tweetDate"]);-->
<!--$tweets[$tweets->key()] = $tweet;-->
<!--$tweets->next();-->
<!--} catch(\Exception $exception) {-->
<!--// if the row couldn't be converted, rethrow it-->
<!--throw(new \PDOException($exception->getMessage(), 0, $exception));-->
<!--}-->
<!--}-->
<!--return ($tweets);-->
<!--}-->

/**
* mutator method for tweets by tweet date
*
* @param \DateTime|string|null $newTweetDate tweet date as a DateTime object or string (or null to load the current time)
* @return \SplFixedArray SplFixedArray of Tweets found or null if not found

public static function getTweetsByTweetdate(\PDO $pdo) : \SPLFixedArray {
// create query template
$query = "SELECT tweetId, tweetProfileId, tweetContent, tweetDate FROM tweet";
$statement = $pdo->prepare($query);
$statement->execute();

// build an array of tweetsByTweetDate
$tweetsByTweetDate = new \SplFixedArray($statement->rowCount());
$statement->setFetchMode(\PDO::FETCH_ASSOC);
while(($row = $statement->fetch()) !== false) {
try {
$tweet = new Tweet($row["tweetId"], $row["tweetProfileId"], $row["tweetContent"], $row["tweetDate"]);
$tweets[$tweets->key()] = $tweet;
$tweets->next();
} catch(\Exception $exception) {
// if the row couldn't be converted, rethrow it
throw(new \PDOException($exception->getMessage(), 0, $exception));
}
}
return ($tweetsByTweetDate);
}
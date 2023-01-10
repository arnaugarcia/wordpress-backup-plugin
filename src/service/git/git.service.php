<?php

require_once 'RepositoryProperties.php';
require_once 'CommitResult.php';
class GitService
{
    private RepositoryProperties $repositoryProperties;

    public function __construct(RepositoryProperties $repositoryProperties)
    {
        $this->repositoryProperties = $repositoryProperties;
    }

    /**
     * @return CommitResult
     */
    function commit(): CommitResult
    {
        exec('git add .');
        exec('git commit -m "' . $this->repositoryProperties->getCommitMessage() . '" --author="' . $this->repositoryProperties->getAuthor() . '"');
        exec('git push origin master');
        return new CommitResult();
    }
}



<?php

namespace {

    class RepositoryProperties
    {
        private string $path;
        private string $name;
        private string $url;
        private string $branch;
        private string $username;
        private string $password;
        private string $email;
        private string $author;
        private string $commitMessage;

        // Builder constructor pattern

        /**
         * @param RepositoryPropertiesBuilder $builder Object to build the properties
         */
        public function __construct(RepositoryPropertiesBuilder $builder)
        {
            $this->path = $builder->getPath();
            $this->name = $builder->getName();
            $this->url = $builder->getUrl();
            $this->branch = $builder->getBranch();
            $this->username = $builder->getUsername();
            $this->password = $builder->getPassword();
            $this->email = $builder->getEmail();
            $this->author = $builder->getAuthor();
            $this->commitMessage = $builder->getCommitMessage();
        }

        public static function builder(): RepositoryPropertiesBuilder
        {
            return new RepositoryPropertiesBuilder();
        }

        /**
         * @return string
         */
        public function getPath(): string
        {
            return $this->path;
        }

        /**
         * @return string
         */
        public function getName(): string
        {
            return $this->name;
        }

        /**
         * @return string
         */
        public function getUrl(): string
        {
            return $this->url;
        }

        /**
         * @return string
         */
        public function getBranch(): string
        {
            return $this->branch;
        }

        /**
         * @return string
         */
        public function getUsername(): string
        {
            return $this->username;
        }

        /**
         * @return string
         */
        public function getPassword(): string
        {
            return $this->password;
        }

        /**
         * @return string
         */
        public function getEmail(): string
        {
            return $this->email;
        }

        /**
         * @return string
         */
        public function getAuthor(): string
        {
            return $this->author;
        }

        /**
         * @return string
         */
        public function getCommitMessage(): string
        {
            return $this->commitMessage;
        }

    }

    class RepositoryPropertiesBuilder {
        public string $path;
        public string $name;
        public string $url;
        public string $branch;
        public string $username;
        public string $password;
        public string $email;
        public string $author;
        public string $commitMessage;

        public function setPath(string $path): RepositoryPropertiesBuilder {
            $this->path = $path;
            return $this;
        }

        public function setName(string $name): RepositoryPropertiesBuilder {
            $this->name = $name;
            return $this;
        }

        public function setUrl(string $url): RepositoryPropertiesBuilder {
            $this->url = $url;
            return $this;
        }

        public function setBranch(string $branch): RepositoryPropertiesBuilder {
            $this->branch = $branch;
            return $this;
        }

        public function setUsername(string $username): RepositoryPropertiesBuilder {
            $this->username = $username;
            return $this;
        }

        public function setPassword(string $password): RepositoryPropertiesBuilder {
            $this->password = $password;
            return $this;
        }

        public function setEmail(string $email): RepositoryPropertiesBuilder {
            $this->email = $email;
            return $this;
        }

        public function setAuthor(string $author): RepositoryPropertiesBuilder {
            $this->author = $author;
            return $this;
        }

        public function setCommitMessage(string $commitMessage): RepositoryPropertiesBuilder {
            $this->commitMessage = $commitMessage;
            return $this;
        }

        public function build(): RepositoryProperties {
            return new RepositoryProperties($this);
        }
    }

}
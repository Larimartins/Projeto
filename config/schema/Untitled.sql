CREATE TABLE `follows` (
  `following_user_id` integer,
  `followed_user_id` integer,
  `created_at` timestamp
);

CREATE TABLE `users` (
  `id` integer PRIMARY KEY,
  `email` varchar(255),
  `passaword` varchar(255) UNIQUE,
  `created_at` timestamp,
  `modified` datetime
);

CREATE TABLE `posts` (
  `id` integer PRIMARY KEY,
  `title` varchar(255),
  `body` text COMMENT 'Content of the post',
  `user_id` integer,
  `status` varchar(255),
  `created_at` timestamp
);

CREATE TABLE `comments` (
  `id` integer PRIMARY KEY,
  `posts_id` integer UNIQUE,
  `users_id` integer,
  `content` TEXT UNIQUE,
  `created_at` timestamp,
  `updated_at` timestamp
);

CREATE TABLE `categories` (
  `id` integer PRIMARY KEY,
  `name` varchar(100) UNIQUE,
  `descripition` text,
  `created_at` timestamp,
  `updated_at` timestamp
);

ALTER TABLE `posts` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `follows` ADD FOREIGN KEY (`following_user_id`) REFERENCES `users` (`id`);

ALTER TABLE `follows` ADD FOREIGN KEY (`followed_user_id`) REFERENCES `users` (`id`);

ALTER TABLE `users` ADD FOREIGN KEY (`email`) REFERENCES `users` (`passaword`);



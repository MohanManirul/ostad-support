/*
  Warnings:

  - Added the required column `col4` to the `Post` table without a default value. This is not possible if the table is not empty.
  - Added the required column `col5` to the `Post` table without a default value. This is not possible if the table is not empty.

*/
-- AlterTable
ALTER TABLE `post` ADD COLUMN `col3` VARCHAR(191) NOT NULL DEFAULT 'Bangladesh',
    ADD COLUMN `col4` VARCHAR(100) NOT NULL,
    ADD COLUMN `col5` TINYTEXT NOT NULL,
    MODIFY `content` VARCHAR(191) NULL;

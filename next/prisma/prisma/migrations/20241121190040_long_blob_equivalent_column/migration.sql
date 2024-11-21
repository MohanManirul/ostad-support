/*
  Warnings:

  - You are about to alter the column `col2` on the `post` table. The data in that column could be lost. The data in that column will be cast from `DateTime(0)` to `DateTime`.
  - You are about to alter the column `col7` on the `post` table. The data in that column could be lost. The data in that column will be cast from `Timestamp(0)` to `Timestamp`.

*/
-- AlterTable
ALTER TABLE `post` MODIFY `col2` DATETIME NOT NULL,
    MODIFY `col7` TIMESTAMP NOT NULL;

-- CreateTable
CREATE TABLE `Images` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `col1` BLOB NOT NULL,
    `col2` LONGBLOB NOT NULL,
    `col3` TINYBLOB NOT NULL,
    `col4` MEDIUMBLOB NOT NULL,
    `col5` BINARY(100) NOT NULL,
    `col6` VARBINARY(100) NOT NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

/*
  Warnings:

  - Added the required column `col1` to the `Post` table without a default value. This is not possible if the table is not empty.
  - Added the required column `col2` to the `Post` table without a default value. This is not possible if the table is not empty.
  - Added the required column `col6` to the `Post` table without a default value. This is not possible if the table is not empty.
  - Added the required column `col7` to the `Post` table without a default value. This is not possible if the table is not empty.
  - Added the required column `col8` to the `Post` table without a default value. This is not possible if the table is not empty.

*/
-- AlterTable
ALTER TABLE `post` ADD COLUMN `col1` DATE NOT NULL,
    ADD COLUMN `col2` DATETIME NOT NULL,
    ADD COLUMN `col6` DATETIME(3) NOT NULL,
    ADD COLUMN `col7` TIMESTAMP NOT NULL,
    ADD COLUMN `col8` TIME NOT NULL;

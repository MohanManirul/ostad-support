/*
  Warnings:

  - You are about to drop the column `col5` on the `images` table. All the data in the column will be lost.
  - You are about to drop the column `col6` on the `images` table. All the data in the column will be lost.
  - You are about to alter the column `col2` on the `post` table. The data in that column could be lost. The data in that column will be cast from `DateTime(0)` to `DateTime`.
  - You are about to alter the column `col7` on the `post` table. The data in that column could be lost. The data in that column will be cast from `Timestamp(0)` to `Timestamp`.

*/
-- AlterTable
ALTER TABLE `images` DROP COLUMN `col5`,
    DROP COLUMN `col6`;

-- AlterTable
ALTER TABLE `post` MODIFY `col2` DATETIME NOT NULL,
    MODIFY `col7` TIMESTAMP NOT NULL;

-- CreateTable
CREATE TABLE `Invoice` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_id` INTEGER NOT NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- AddForeignKey
ALTER TABLE `Invoice` ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `Users`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

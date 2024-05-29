CREATE TABLE conseils (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    titre VARCHAR(255) NOT NULL,
    categories VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    date_submis TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    image_data BLOB,
    FOREIGN KEY (user_id) REFERENCES utilisateurs(id)
);

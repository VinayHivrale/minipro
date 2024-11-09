-- Create Database
CREATE DATABASE IF NOT EXISTS recipes_db;
USE recipes_db;

-- Create Table
CREATE TABLE IF NOT EXISTS recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    thumbnail_url VARCHAR(255) NOT NULL,
    ingredients TEXT NOT NULL,
    instructions TEXT NOT NULL
);

-- Insert Recipes
INSERT INTO recipes (name, thumbnail_url, ingredients, instructions) VALUES
('Tea', 'images/tea.jpg', 
 'Water, Tea Leaves, Sugar, Milk, Ginger', 
 '1. Boil water and add tea leaves.\n2. Add sugar and ginger.\n3. Add milk and boil again.\n4. Strain and serve hot.'
),
('Poha', 'images/poha.jpg', 
 'Flattened rice, Onion, Green chilies, Mustard seeds, Curry leaves, Turmeric powder, Salt, Lemon, Peanuts', 
 '1. Rinse poha and drain water.\n2. Heat oil, add mustard seeds, curry leaves, and green chilies.\n3. Add onions and sauté.\n4. Add turmeric and poha. Mix well.\n5. Add salt, peanuts, and lemon juice. Serve warm.'
),
('Pasta', 'images/pasta.jpg', 
 'Pasta, Olive oil, Garlic, Tomatoes, Basil, Salt, Parmesan cheese', 
 '1. Boil pasta as per package instructions.\n2. Sauté garlic in olive oil.\n3. Add tomatoes and cook till soft.\n4. Mix in basil and boiled pasta.\n5. Garnish with Parmesan cheese and serve hot.'
),
('Cold Coffee', 'images/cold_coffee.jpg', 
 'Coffee powder, Sugar, Cold milk, Ice cubes, Vanilla ice cream', 
 '1. Blend coffee powder, sugar, milk, and ice cubes until smooth.\n2. Pour into a glass and top with a scoop of vanilla ice cream.\n3. Serve chilled.'
),
('Idli', 'images/idli.jpg', 
 'Idli batter, Oil for greasing', 
 '1. Grease idli molds with oil.\n2. Pour batter into molds.\n3. Steam for 10-12 minutes.\n4. Serve hot with chutney and sambar.'
);

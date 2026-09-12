ALTER TABLE stripe_accounts
    ADD COLUMN level VARCHAR(2) NOT NULL DEFAULT 'A1' AFTER current_mission;

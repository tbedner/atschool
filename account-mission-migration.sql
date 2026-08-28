ALTER TABLE stripe_accounts
    ADD COLUMN moodle_user_id BIGINT UNSIGNED NULL AFTER current_period_end,
    ADD COLUMN current_mission TINYINT UNSIGNED NOT NULL DEFAULT 0 AFTER moodle_user_id;

CREATE TABLE stripe_processed_events (
    event_id VARCHAR(255) NOT NULL,
    event_type VARCHAR(100) NOT NULL,
    processed_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (event_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

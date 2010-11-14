class AddChapterDetails < ActiveRecord::Migration
  def self.up
    add_column "chapters", "body", :text
    add_column "chapters", "tagline", :string
  end

  def self.down
    remove_column "chapters", "body"
    remove_column "chapters", "tagline"
  end
end

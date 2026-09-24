# MCP Server Configuration - UI Module

<<<<<<< HEAD
**Last Updated**: 31 Gennaio 2026
=======
<<<<<<< HEAD
<<<<<<< .merge_file_DpIZ0S
=======
<<<<<<< .merge_file_i5JNqs

=======
<<<<<<< HEAD
**Last Updated**: 31 Gennaio 2026
=======
<<<<<<< HEAD
>>>>>>> .merge_file_QQzosc

=======
**Last Updated**: 31 Gennaio 2026
>>>>>>> laraxot/dev
<<<<<<< .merge_file_DpIZ0S
=======
>>>>>>> laraxot/dev
=======
**Last Updated**: 31 Gennaio 2026
=======

>>>>>>> .merge_file_dIsjtv
>>>>>>> laraxot/dev
>>>>>>> .merge_file_QQzosc
>>>>>>> laraxot/dev
**Status**: ✅ Configured
**MCP Servers**: Asana, ClickUp, Filesystem, Database, Redmine (Planned)

---

## 📋 Overview

The UI module's MCP configuration enables AI assistants to interact with:
- **Asana Work Graph** - Task and project management
- **ClickUp Workspace** - Advanced task workflows and time tracking
- **Redmine** - Project management (planned, requires self-hosted instance)
- **Filesystem** - Direct file access
- **Database** - SQLite queries for data inspection

---

## 🔧 Configuration

### Active MCP Servers

```json
{
  "mcpServers": {
    "asana": {
      "command": "npx",
      "args": ["mcp-remote", "https://mcp.asana.com/sse"],
      "description": "Asana Work Graph integration"
    },
    "clickup": {
      "command": "npx",
      "args": ["-y", "mcp-remote", "https://mcp.clickup.com/mcp"],
      "description": "ClickUp workspace integration"
    },
    "filesystem": {
      "command": "npx",
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_DpIZ0S
      "args": ["-y", "@modelcontextprotocol/server-filesystem", ". progetto>/laravel"],
||||||| parent of 9a84589 (.)
=======
=======
<<<<<<< .merge_file_i5JNqs
      "args": ["-y", "@modelcontextprotocol/server-filesystem", ". progetto>/laravel"],
||||||| parent of 9a84589 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
      "args": ["-y", "@modelcontextprotocol/server-filesystem", ". progetto>/laravel"],
||||||| parent of 9a84589 (.)
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
      "args": ["-y", "@modelcontextprotocol/server-filesystem", ". progetto>/laravel"],
||||||| parent of 9a84589 (.)
>>>>>>> .merge_file_dIsjtv
>>>>>>> .merge_file_QQzosc
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
      "args": ["-y", "@modelcontextprotocol/server-filesystem", "/var/www/_bases/base_laravelpizza/laravel"],
      "description": "Access to UI module files"
    },
    "database": {
      "command": "npx",
      "args": ["-y", "@bytebase/dbhub"],
      "env": {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_DpIZ0S
=======
<<<<<<< .merge_file_i5JNqs
        "DATABASE_URL": "sqlite://. progetto>/laravel/database/database.sqlite"
||||||| parent of 9a84589 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> .merge_file_QQzosc
        "DATABASE_URL": "sqlite://. progetto>/laravel/database/database.sqlite"
||||||| parent of 9a84589 (.)
=======
>>>>>>> laraxot/dev
<<<<<<< .merge_file_DpIZ0S
=======
>>>>>>> laraxot/dev
=======
=======
        "DATABASE_URL": "sqlite://. progetto>/laravel/database/database.sqlite"
||||||| parent of 9a84589 (.)
>>>>>>> .merge_file_dIsjtv
>>>>>>> laraxot/dev
>>>>>>> .merge_file_QQzosc
>>>>>>> laraxot/dev
        "DATABASE_URL": "sqlite:///var/www/_bases/base_laravelpizza/laravel/database/database.sqlite"
      },
      "description": "SQLite database queries"
    }
  }
}
```

---

## 🚀 Usage Examples

### Asana Integration
```bash
# Create task
<<<<<<< HEAD
"Create task in 'LaravelPizza - UI Module' project: 'Implement location selector component'"
=======
<<<<<<< HEAD
<<<<<<< .merge_file_DpIZ0S
=======
<<<<<<< .merge_file_i5JNqs
"Create task in '<nome progetto> - UI Module' project: 'Implement location selector component'"
=======
<<<<<<< HEAD
"Create task in 'LaravelPizza - UI Module' project: 'Implement location selector component'"
=======
<<<<<<< HEAD
>>>>>>> .merge_file_QQzosc
"Create task in '<nome progetto> - UI Module' project: 'Implement location selector component'"
=======
"Create task in 'LaravelPizza - UI Module' project: 'Implement location selector component'"
>>>>>>> laraxot/dev
<<<<<<< .merge_file_DpIZ0S
=======
>>>>>>> laraxot/dev
=======
"Create task in 'LaravelPizza - UI Module' project: 'Implement location selector component'"
=======
"Create task in '<nome progetto> - UI Module' project: 'Implement location selector component'"
>>>>>>> .merge_file_dIsjtv
>>>>>>> laraxot/dev
>>>>>>> .merge_file_QQzosc
>>>>>>> laraxot/dev

# Update status
"Update task 'Create reusable card component' status to 'In Progress'"

# Log time
"Log 3 hours on task 'Implement interactive form components'"
```

### ClickUp Integration
```bash
# Create task
"Create task in 'UI Development' space: 'Implement location selector component'"

# Update status
"Update task 'Create reusable card component' status to 'In Progress'"

# Log time
"Log 3 hours on task 'Implement interactive form components'"
```

### Redmine Integration (Planned)
```bash
# Create issue
"Create issue in project 'UI Module': task 'Implement location selector component' (Priority: High)"
```

---

## 📊 MCP Servers Comparison

| Server | Status | Auth | Best For |
|--------|--------|------|----------|
| **Asana** | ✅ Active | OAuth | Established workflows |
| **ClickUp** | ✅ Active | OAuth | Time tracking, reports |
| **Redmine** | 🔄 Planned | API Key | Self-hosted, custom workflows |
| **Filesystem** | ✅ Active | N/A | Direct file access |
| **Database** | ✅ Active | N/A | Schema inspection |

---

## 📝 Best Practices

1. **Task Naming Convention**: Include module prefix `[UI]`
2. **Tagging**: Use consistent tags across platforms
3. **Use Asana for**: Established workflows, team collaboration
4. **Use ClickUp for**: Time tracking, executive reports
5. **Use Redmine for**: Self-hosted requirements (when implemented)

---

## 📚 Related Documentation

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< .merge_file_DpIZ0S
=======
<<<<<<< .merge_file_i5JNqs
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
- [Asana MCP Configuration](../../../docs/mcp-asana-configuration.md)
- [ClickUp MCP Configuration](../../../docs/mcp-clickup-configuration.md)
- [Redmine MCP Configuration](../../../docs/mcp-redmine-configuration.md)
- [UI Module Roadmap](./roadmap-2026-01-31.md)
<<<<<<< HEAD
=======
=======
>>>>>>> .merge_file_dIsjtv
>>>>>>> .merge_file_QQzosc
- [Asana MCP Configuration](../../../../docs/mcp-asana-configuration.md)
- [ClickUp MCP Configuration](../../../../docs/mcp-clickup-configuration.md)
- [Redmine MCP Configuration](../../../../docs/mcp-redmine-configuration.md)
- [UI Module Roadmap](./roadmap-[date].md)
<<<<<<< .merge_file_DpIZ0S
=======
=======
<<<<<<< .merge_file_i5JNqs
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_QQzosc
- [Asana MCP Configuration](../../../docs/mcp-asana-configuration.md)
- [ClickUp MCP Configuration](../../../docs/mcp-clickup-configuration.md)
- [Redmine MCP Configuration](../../../docs/mcp-redmine-configuration.md)
- [UI Module Roadmap](./roadmap-2026-01-31.md)
<<<<<<< .merge_file_DpIZ0S
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_dIsjtv
>>>>>>> .merge_file_QQzosc
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev

---

## 🔄 Updates

<<<<<<< HEAD
- **2026-01-31**: Added ClickUp support
- **2026-01-31**: Planned Redmine integration
=======
<<<<<<< HEAD
<<<<<<< .merge_file_DpIZ0S
- **[DATE]**: Added ClickUp support
- **[DATE]**: Planned Redmine integration
=======
- **2026-01-31**: Added ClickUp support
- **2026-01-31**: Planned Redmine integration
=======
<<<<<<< .merge_file_i5JNqs
- **[DATE]**: Added ClickUp support
- **[DATE]**: Planned Redmine integration
=======
<<<<<<< HEAD
- **2026-01-31**: Added ClickUp support
- **2026-01-31**: Planned Redmine integration
=======
<<<<<<< HEAD
- **[DATE]**: Added ClickUp support
- **[DATE]**: Planned Redmine integration
=======
- **2026-01-31**: Added ClickUp support
- **2026-01-31**: Planned Redmine integration
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
- **2026-01-31**: Added ClickUp support
- **2026-01-31**: Planned Redmine integration
=======
- **[DATE]**: Added ClickUp support
- **[DATE]**: Planned Redmine integration
>>>>>>> .merge_file_dIsjtv
>>>>>>> .merge_file_QQzosc
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
- **Servers Active**: 4 (Asana, ClickUp, Filesystem, Database)

---

**Module**: UI (User Interface Components)
**MCP Version**: 2.0.0
<<<<<<< HEAD
**Last Review**: 31 Gennaio 2026
=======
<<<<<<< HEAD
**Last Review**: 31 Gennaio 2026
=======
<<<<<<< .merge_file_DpIZ0S
**Last Review**: 31 Gennaio 2026
=======
<<<<<<< .merge_file_i5JNqs
<<<<<<< HEAD
**Last Review**: 31 Gennaio 2026
=======
<<<<<<< HEAD
**Last Review**: 31 Gennaio 2026
=======
**Last Review**: 31 Gennaio 2026
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
**Last Review**: 31 Gennaio 2026
>>>>>>> .merge_file_dIsjtv
>>>>>>> .merge_file_QQzosc
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
